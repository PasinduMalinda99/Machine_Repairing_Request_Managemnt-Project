<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\PasswordResetToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function sign_up()
    {
        return view("auth/sign_up");
    }

    public function sign_upSave(Request $request)
    {
        $request->validate([
            "username" => "required",
            "mobile_number" => "required|unique:users",
            "email" => "required|email|unique:users",
            "password" => "required|min:8",
            "confirmpassword" => "required|same:password",
        ]);

            $validator = Validator::make($request->all(), [
                "username" => "required",
                "mobile_number" => "required|unique:users",
                "email" => "required|email|unique:users",
                "password" => "required|min:8",
                "confirmpassword" => "required|same:password|confirmed",
                "confirmpassword" => [
                    "required",
                    "same:password",
                    function ($attribute, $value, $fail) {
                        $fail('The confirmation password does not match the password. Check again!');
                    },
                ],
            ]);

            $user = new User();
            $user->name = $request->username;
            $user->mobile_number = $request->mobile_number;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->type = "0";

            //$user->save();

            if($user->save()){
                return Redirect(route("sign_in.action"))->with("success", "User account created successfully!");
            }
            elseif ($validator->fails()) {
                return redirect(route("auth/sign_up"))->withErrors($validator);
            }
            else {
                return redirect(route("auth/sign_up"))->with("error", "An error occurred while creating your account. Please try again.");
            }
    }

    public function sign_in()
    {
        return view("auth/sign_in");
    }

    public function sign_inAction(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin/home');
            } else {
                return redirect()->route('user_home');
            }
        } else {
            return redirect()->route('sign_in')->with('error', 'Invalid Email or Password.');
        }

        $request->session()->regenerate();
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/sign_in');
    }





    public function forgot_password()
    {
        return view("forgot_password");
    }


    public function forgot_password_act(Request $request)
    {
        $customMessage = [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.exists' => 'The provided email does not exist in our records.',
        ];

        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], $customMessage);

        $token = \Str::random(60);

        // Ensure unique token generation
        while (PasswordResetToken::where('token', $token)->exists()) {
            $token = \Str::random(60);
        }

        PasswordResetToken::updateOrCreate(
            [
                'email' => $request->email
            ],
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => now(),
            ]
        );

        Mail::to($request->email)->send(new ResetPasswordMail($token));

        // Save the token in the remember_token field
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->update([
                'remember_token' => $token,
            ]);
        }

        return redirect()->route('forgot_password')->with('success', 'Your email is valid! Check your email now You have received a security message.');
    }

    public function validate_forgot_password_act(Request $request)
    {
        $customMessage = [
            'password.required' => 'The password field is required.',
            'password.min' => 'Password must be at least 8 characters long.',
        ];

        $request->validate([
            'password' => 'required|min:8'
        ], $customMessage);

        $token = PasswordResetToken::where('token', $request->token)->first();

        if (!$token) {
            return redirect()->route('sign_in')->with('failed', 'Invalid token');
        }

        //$user = User::where('email', $token->email)->first();

        $user = User::where('email', $token->email)->where('remember_token', $token->token)->first();

        if (!$user) {
            return redirect()->route('sign_in')->with('failed', 'User not found');
        }

        // Update the user's password
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        // Delete the used token for security
        $token->delete();

        return redirect()->route('sign_in')->with('success', 'Password reset successful.');
    }

    public function validate_forgot_password(Request $request, $token)
    {
        $getToken = PasswordResetToken::where('token', $token)->first();

        if(!$getToken){
            return redirect()->route('sign_in')->with('failed','Invalid token');
        }

        return view('auth.validate_token', compact('token'));
    }




}

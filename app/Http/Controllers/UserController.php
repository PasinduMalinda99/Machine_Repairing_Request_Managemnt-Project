<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepairRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user_index()
    {
        return view('user_index');
    }

    public function user_profile()
    {
        return view('user_profile');
    }

    public function user_request()
    {
        return view('user_request');
    }

    public function user_about()
    {
        return view('user_about');
    }

    public function user_view_request()
    {
        $userId = auth()->id();

        // Retrieve only the repair requests that belong to the authenticated user

        $repair_requests = RepairRequest::where('user_id', $userId)
                                        ->orderBy('created_at', 'DESC')
                                        ->get();

        return view('user_view_request', compact('repair_requests'));
    }

    /*public function ()
    {
        return view('');
    }

    public function ()
    {
        return view('');
    }*/

}

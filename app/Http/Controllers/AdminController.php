<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallary;
use App\Models\RepairRequest;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function admin_index()
    {
        $totalUser = User::count();

        $todayDate = now()->format('Y-m-d');

        $todayRequest = RepairRequest::whereDate('created_at', $todayDate)->count();

        $totalRequest = RepairRequest::count();

        $pendingRequest = RepairRequest::where('status','Pending')->count();

        $acceptedRequest = RepairRequest::where('status','Accepted')->count();

        $rejectedRequest = RepairRequest::where('status','Rejected')->count();

        $repairingRequest = RepairRequest::where('status','On Repair Process')->count();

        $completeRequest = RepairRequest::where('status','Job Completed')->count();

        return view('admin_index', compact('totalUser','todayRequest','totalRequest','pendingRequest','acceptedRequest','rejectedRequest','repairingRequest','completeRequest'));
    }

    public function admin_manage_user()
    {
        return view('admin_manage_user');
    }

    public function admin_manage_user_view()
    {
        return view('admin_manage_user_view');
    }

    public function admin_view_request()
    {
        return view('admin_view_request');
    }
/*
    public function admin_update_products()
    {
        return view('admin_update_products');
    }

    public function admin_list_products()
    {
        return view('admin_list_products');
    }
*/
    public function admin_update_gallery()
    {
        $gallary = Gallary::all();
        return view('admin_update_gallery', compact('gallary'));
    }

    public function admin_upload_gallery(Request $request)
    {
        $data = new Gallary;

        $image = $request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('gallary',$imagename);

            $data->image = $imagename;

            $data->save();

            return redirect()->back();
        }
    }

    public function delete_admin_upload_gallery($id)
    {
        $data = Gallary::find($id);

        // Check if the image file exists and delete it
        $image_path = public_path().'/gallary/'.$data->image;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        // Delete the image entry from the database
        $data->delete();

        return redirect()->back();
    }


/*
    public function ()
    {
        return view('');
    }*/
}

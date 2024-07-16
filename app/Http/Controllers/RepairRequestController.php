<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepairRequest;

use Illuminate\Support\Facades\Mail;
use App\Mail\RepairRequestSubmitted;

class RepairRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user_request()
    {
        return view('user_request');
    }

    public function admin_view_request()
    {
        $repair_requests = RepairRequest::orderBy('created_at','DESC')->get();

        return view('admin_view_request', compact('repair_requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function user_request_store(Request $request)
    {
        $validatedData = $request->validate([
            'device_type' => 'required',
            'device_information' => 'required',
            'issue_description' => 'required',
            'email' => 'required|email',
            'mobile_number' => 'required|min:10|max:10',
            'additional_details' => 'nullable',
        ]);

        // Add the default status to the validated data array
        $validatedData['status'] = 'Pending';

        // Create a new RepairRequest object with the validated data
        $repair_request = new RepairRequest($validatedData);

        // Associate the repair request with the authenticated user
        $repair_request->user()->associate(auth()->user());

        // Save the repair request to the database
        $repair_request->save();

        // Send an email to the admin

        $adminEmail = 'skpasindu.malinda@gmail.com'; // Replace with the actual admin's email
        Mail::to($adminEmail)->send(new RepairRequestSubmitted($repair_request));

        return redirect()->route('user/user_request')->with('success', 'Your Repair Request Sent Successfully!');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //public function show($id)

    public function admin_view_full_request($id)
    {
        $repair_requests = RepairRequest::findOrFail($id);

        return view('admin_view_full_request', compact('repair_requests'));
    }

    public function user_view_sent_request($id)
    {
        $repair_requests = RepairRequest::findOrFail($id);

        return view('user_view_sent_request', compact('repair_requests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //public function destroy($id)

    public function admin_view_request_delete($id)
    {
        $repair_requests = RepairRequest::findOrFail($id);

        $repair_requests->delete();

        return redirect()->route('admin/admin_view_request')->with('success', 'Request Deleted Successfully!');
    }


    public function user_view_request_delete($id)
    {
        $repair_requests = RepairRequest::findOrFail($id);

        $repair_requests->delete();

        return redirect()->route('user/user_view_request')->with('success', 'Request Deleted Successfully!');
    }

// Update reiquest status ---->

    public function approve_request($id)
    {
        $repair_requests = RepairRequest::find($id);

        $repair_requests->status='Accepted';

        $repair_requests->save();

        return redirect()->back();
    }

    public function reject_request($id)
    {
        $repair_requests = RepairRequest::find($id);

        $repair_requests->status='Rejected';

        $repair_requests->save();

        return redirect()->back();
    }

    public function on_process_request($id)
    {
        $repair_requests = RepairRequest::find($id);

        $repair_requests->status='On Repair Process';

        $repair_requests->save();

        return redirect()->back();
    }

    public function complete_request($id)
    {
        $repair_requests = RepairRequest::find($id);

        $repair_requests->status='Job Completed';

        $repair_requests->save();

        return redirect()->back();
    }

}

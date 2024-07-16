<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RepairRequest;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user_home');
    }

    public function adminHome()
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
}

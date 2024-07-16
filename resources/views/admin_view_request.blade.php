<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>RMS Technologies</title>
    <link rel="stylesheet" href="{{ asset("admin/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="{{ asset("admin/fonts/fontawesome-all.min.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/fonts/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/fonts/fontawesome5-overrides.min.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/css/admin_sidebar.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/css/Bootstrap-Image-Uploader.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/css/Sidebar-Footer-Clean-icons.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/css/Sidebar-Hero-Carousel-images.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/css/Table-With-Search-search-table.css")}}">
    <link rel="stylesheet" href="{{ asset("admin/css/Table-With-Search.css")}}">
</head>

<body>
    <ul class="nav flex-column shadow d-flex sidebar mobile-hid">
        <li class="nav-item logo-holder">
            <div class="text-center text-white logo py-4 mx-4"><a class="text-white text-decoration-none" id="title" href="#"><strong>RMS Technologies (PVT) Ltd</strong></a><a class="text-white float-right" id="sidebarToggleHolder" href="#"><i class="fas fa-bars" id="sidebarToggle"></i></a></div>
        </li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="{{url('admin/admin_index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-speedometer mx-3">
                    <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
                    <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"></path>
                </svg><span class="text-nowrap mx-2">Dashboard</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="{{url('admin/admin_manage_user')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-fill-check mx-3">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                    <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"></path>
                </svg><span class="text-nowrap mx-2">Manage User Profile</span></a></li>
        <li class="nav-item"><a class="nav-link active text-left text-white py-1 px-0" href="{{url('admin/admin_view_request')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chat-left-text-fill mx-3">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"></path>
                </svg><span class="text-nowrap mx-2">View Repair Request</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="{{url('admin/admin_update_products')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-upload mx-3">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path>
                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"></path>
                </svg><span class="text-nowrap mx-2">Update Products</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="{{url('admin/admin_update_gallery')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-images mx-3">
                    <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                    <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"></path>
                </svg><span class="text-nowrap mx-2">Update Gallery</span></a></li>
        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-left text-white py-1 px-0 position-relative" aria-expanded="false" data-toggle="dropdown" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-sliders mx-3">
                    <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"></path>
                </svg><span class="text-nowrap mx-2">Settings</span><i class="fas fa-caret-down float-none float-lg-right fa-sm"></i></a>
            <div class="dropdown-menu border-0 animated fadeIn"><a class="dropdown-item text-white" href="#"><span>Change password</span></a><a class="dropdown-item text-white" href="#"><span>Change email</span></a><a class="dropdown-item text-white" href="#"><span>More</span></a></div>
        </li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="{{route('logout')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right-square-fill mx-3">
                    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"></path>
                </svg><i class="fa fa-caret-right d-none position-absolute"></i><span class="text-nowrap mx-2">Log out</span></a></li>
    </ul>
    <div class="container article-clean">
        <div class="row">
            <div class="col">
                <div>
                    <div class="col" style="margin-top: 25px;padding-top: 1px;">
                        <h2 class="text-left" style="text-align: center;">List of Repair Request</h2>
                    </div>

                    <div>
                        @if(session()->has("success"))
                            <div class="alert alert-success">
                                {{session()->get("success")}}
                            </div>
                        @endif
                        @if(session()->has("error"))
                            <div class="alert alert-danger">
                                {{session()->get("error")}}
                            </div>
                        @endif
                    </div>

                    <div class="col-md-12 search-table-col" style="margin-top: 0px;">
                        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
                        <div class="table-responsive table table-hover table-bordered results">
                            <table class="table table-hover table-bordered">
                                <thead class="bill-header cs">
                                    <tr>
                                        <th id="trs-hd-1" class="col-lg-1">Request Count</th>
                                        <th id="trs-hd-2" class="col-lg-1">Request ID</th>
                                        <th id="trs-hd-3" class="col-lg-1">Device Type</th>
                                        <th id="trs-hd-4" class="col-lg-1">Request Date</th>
                                        <th id="trs-hd-5" class="col-lg-1">Status</th>
                                        <th id="trs-hd-6" class="col-lg-3">Request Status Update</th>
                                        <th id="trs-hd-7" class="col-lg-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="warning no-result">
                                        <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                                    </tr>

                                    @if($repair_requests->count() > 0)
                                        @foreach($repair_requests as $record)

                                    <tr>
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td style="text-align: center;">req_id_{{ str_pad($record->id, 2, '0', STR_PAD_LEFT) }}</td>
                                        <td style="text-align: center;">{{ $record->device_type }}</td>
                                        <td style="text-align: center;">{{ $record->created_at->format('Y-m-d') }}</td>
                                        <td style="text-align: center;">

                                            @if($record->status == 'Pending')

                                                <span style="color:rgb(170, 0, 186)"><b>Pending</b></span>

                                            @endif

                                            @if($record->status == 'Accepted')

                                                <span style="color:rgb(52, 103, 255)"><b>Accepted</b></span>

                                            @endif

                                            @if($record->status == 'Rejected')

                                                <span style="color:rgb(255, 82, 52)"><b>Rejected</b></span>

                                            @endif

                                            @if($record->status == 'On Repair Process')

                                                <span style="color:rgb(240, 200, 0)"><b>On Repair Process</b></span>

                                            @endif

                                            @if($record->status == 'Job Completed')

                                                <span style="color:rgb(0, 183, 0)"><b>Job Completed</b></span>

                                            @endif

                                        </td>

                                        <td style="text-align: center;">

                                            <a class="btn btn-primary"  href="{{ url('admin/approve_request',$record->id) }}" onclick="return confirm('Accept Repair Request?');" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" style="margin-top: 2px;margin-right: 2px;margin-bottom: 2px;margin-left: 2px;" title="Accept"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clipboard-check">
                                            <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
                                            </svg></a>

                                            <a class="btn btn-danger" href="{{ url('admin/reject_request',$record->id) }}" onclick="return confirm('Reject Repair Request?');" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" style="margin-top: 2px;margin-right: 2px;margin-bottom: 2px;margin-left: 2px;" title="Reject"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clipboard-x">
                                            <path fill-rule="evenodd" d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"></path>
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
                                            </svg></a>

                                            <a class="btn btn-warning" href="{{ url('admin/on_process_request',$record->id) }}" onclick="return confirm('On Repair Process?');" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" style="margin-top: 2px;margin-right: 2px;margin-bottom: 2px;margin-left: 2px;" title="On Process"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-wrench-adjustable text-light">
                                            <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"></path>
                                            <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
                                            </svg></a>

                                            <a class="btn btn-success" href="{{ url('admin/complete_request',$record->id) }}" onclick="return confirm('Job Complete?');" role="button" data-bs-toggle="tooltip" data-bss-tooltip="" style="margin-top: 2px;margin-right: 2px;margin-bottom: 2px;margin-left: 2px;" title="Job Complete"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check2-square text-light">
                                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"></path>
                                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"></path>
                                            </svg></a>
                                        </td>

                                        <td style="text-align: center;"><a href="{{ url('admin/admin_view_full_request/' . $record->id) }}" title="View Request" class="btn btn-primary" type="submit" style="margin-left: 3px;margin-bottom: 3px;margin-right: 3px;margin-top: 3px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye-fill" style="font-size: 15px;">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
                                                </svg></a>

                                                <!-- <button class="btn btn-success" style="margin-left: 3px;margin-bottom: 3px;margin-right: 3px;margin-top: 3px;" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-reply-fill" style="font-size: 15px;">
                                                    <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"></path>
                                                </svg></button> -->

                                                <form action="{{ route('admin/admin_view_request_delete', $record->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete repair request?')">
                                                    @csrf
                                                    @method('DELETE')

                                                <button class="btn btn-danger" title="Delete" style="margin-left: 3px;margin-bottom: 3px;margin-right: 3px;margin-top: 3px;" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-trash3-fill" style="font-size: 15px;">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"></path>
                                                </svg></button></td>

                                            </form>
                                    </tr>

                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="text-center" colspan="5">Repair Request not found</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="container text-center py-4">
                        <hr>
                        <div class="row row-cols-1 row-cols-lg-3">
                            <div class="col">
                                <p class="text-muted my-2"><span style="color: rgba(33, 37, 41, 0.75);">RMS Technologies (Pvt) Ltd.</span></p>
                            </div>
                            <div class="col">
                                <ul class="list-inline my-2">
                                    <li class="list-inline-item">
                                        <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                            </svg></div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                            </svg></div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                            </svg></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col">
                                <p class="text-muted my-2"><span style="color: rgba(33, 37, 41, 0.75);">Copyright&nbsp;© 2024&nbsp;</span><span style="color: rgb(33, 37, 41);">All rights&nbsp;reserved.</span><br><br></p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="{{ asset("admin/js/jquery.min.js")}}"></script>
    <script src="{{ asset("admin/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{ asset("admin/js/bs-init.js")}}"></script>
    <script src="{{ asset("admin/js/Bootstrap-Image-Uploader-main.js")}}"></script>
    <script src="{{ asset("admin/js/sidebar.js")}}"></script>
    <script src="{{ asset("admin/js/Table-With-Search-search-table.js")}}"></script>
</body>

</html>

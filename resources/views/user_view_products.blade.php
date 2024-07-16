<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>RMS Technologies</title>
    <link rel="stylesheet" href="{{ asset("user/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="{{ asset("user/fonts/fontawesome-all.min.css")}}">
    <link rel="stylesheet" href="{{ asset("user/fonts/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{ asset("user/fonts/fontawesome5-overrides.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/aos.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/Product-Details.css")}}">
    <link rel="stylesheet" href="{{ asset("user/css/Sidebar-Footer-Clean-icons.css")}}">
    <link rel="stylesheet" href="{{ asset("user/css/Sidebar-Hero-Carousel-images.css")}}">
    <link rel="stylesheet" href="{{ asset("user/css/sidebar.css")}}">
    <link rel="stylesheet" href="{{ asset("css/Social-Icon--hover-effect.css")}}">
    <link rel="stylesheet" href="{{ asset("user/css/User-rating-F19690.css")}}">
</head>

<body>
    <ul class="nav flex-column shadow d-flex sidebar mobile-hid">
        <li class="nav-item logo-holder">
            <div class="text-center text-white logo py-4 mx-4"><a class="text-white text-decoration-none" id="title" href="#"><strong>RMS Technologies (PVT) Ltd</strong></a><a class="text-white float-right" id="sidebarToggleHolder" href="#"><i class="fas fa-bars" id="sidebarToggle"></i></a></div>
        </li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="{{url('user/user_index')}}"><i class="fas fa-tachometer-alt mx-3"></i><span class="text-nowrap mx-2">Dashboard</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="{{url('user/user_profile')}}"><i class="fas fa-user mx-3"></i><span class="text-nowrap mx-2">User profile</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="{{url('user/user_request')}}"><i class="far fa-id-card mx-3"></i><span class="text-nowrap mx-2">Repair request</span></a></li>
        <li class="nav-item"><a class="nav-link active text-left text-white py-1 px-0" href="{{url('user/user_products')}}"><i class="fas fa-archive mx-3"></i><span class="text-nowrap mx-2">Products</span></a></li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="{{url('user/user_about')}}"><i class="fas fa-user-tag mx-3"></i><span class="text-nowrap mx-2">About</span></a></li>
        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-left text-white py-1 px-0 position-relative" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-sliders-h mx-3"></i><span class="text-nowrap mx-2">Settings</span><i class="fas fa-caret-down float-none float-lg-right fa-sm"></i></a>
            <div class="dropdown-menu border-0 animated fadeIn"><a class="dropdown-item text-white" href="#"><span>Change password</span></a><a class="dropdown-item text-white" href="#"><span>Change email</span></a><a class="dropdown-item text-white" href="#"><span>More</span></a></div>
        </li>
        <li class="nav-item"><a class="nav-link text-left text-white py-1 px-0" href="{{route('logout')}}"><i class="fas fa-sign-out-alt mx-3"></i><i class="fa fa-caret-right d-none position-absolute"></i><span class="text-nowrap mx-2">Log out</span></a></li>
    </ul>
    <div></div>
    <div class="container h-100">
        <div class="col-md-10 col-lg-11 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
            <div></div>
        </div>
    </div>
    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 15px;">
                        @if(isset($product) && $product->product_image)
                            <img class="img-thumbnail img-fluid center-block" src="/product_images/{{ $product->product_image }}">
                        @else
                            <p>No product image available.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h3 style="margin-bottom: 12px;">{{ $product->product_name }}</h3>
                <div style="margin-top: 18px;">
                    <p class="text-start" style="margin-bottom: 5px;">Get in Touch for Purchasing Inquiries Regarding This Machine.</p>
                    <div class="d-flex align-items-center p-3" data-aos="zoom-in-up" style="margin-top: 10px;"><a class="social-link" style="margin: 0px 5px;margin-top: 5px;margin-bottom: 8px;" href="tel:+94 77 7281060"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone-outbound-fill social-link-icon">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"></path>
                            </svg>
                            <div class="social-link-effect"></div>
                        </a>
                        <div class="px-2">
                            <h6 class="mb-0">Phone</h6>
                            <p class="mb-0">+94 77 7281060</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center p-3" data-aos="zoom-in-up"><a class="social-link" href="mailto:rmstech2000@gmail.com" style="margin: 0px 5px;margin-top: 5px;margin-bottom: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-chat-text-fill social-link-icon">
                                <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"></path>
                            </svg>
                            <div class="social-link-effect"></div>
                        </a>
                        <div class="px-2">
                            <h6 class="mb-0">Email</h6>
                            <p class="mb-0">rmstech2000@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center p-3" data-aos="zoom-in-up"><a class="social-link" href="https://www.facebook.com/rmstechnologies/" target="_blank" style="margin: 0px 5px;margin-top: 5px;margin-bottom: 8px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook social-link-icon">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                            </svg>
                            <div class="social-link-effect"></div>
                        </a>
                        <div class="px-2">
                            <h6 class="mb-0">Facebook</h6>
                            <p class="mb-0">RMS Technologies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 style="margin-bottom: 15px;">Machine Details</h4>
                <p class="text-start" style="margin-bottom: 15px;">{{ $product->product_details }}</p>
            </div>
            <div class="col-md-6">
                <h4 style="margin-bottom: 15px;margin-top: 0px;">Machine Features</h4>
                <p class="text-start">{{ $product->product_features }}</p>
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
    <script src="{{ asset("user/js/jquery.min.js")}}"></script>
    <script src="{{ asset("user/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{ asset("user/js/aos.min.js")}}"></script>
    <script src="{{ asset("user/js/bs-init.js")}}"></script>
    <script src="{{ asset("user/js/sidebar.js")}}"></script>
</body>

</html>

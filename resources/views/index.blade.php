<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>RMS Technologies</title>
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/animate.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/Navbar-With-Button-icons.css")}}">
    <link rel="stylesheet" href="{{ asset("css/Simple-Slider-swiper-bundle.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/Simple-Slider.css")}}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset("css/Features-Image-images.css")}}">
    <link rel="stylesheet" href="{{ asset("css/Lightbox-Gallery-baguetteBox.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/fonts/fontawesome-all.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/fonts/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{ asset("css/fonts/fontawesome5-overrides.min.css")}}">
</head>

<body>
    <nav></nav>
    <nav class="navbar navbar-expand-md shadow-sm py-3">
        <div class="container-fluid"><a class="navbar-brand d-flex align-items-center" href="{{url('index')}}"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg></span><span>RMS Technologies</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{url('index')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('services')}}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('products')}}">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('gallery')}}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
                </ul><a class="btn btn-outline-primary ms-md-2" role="button" href="{{url('sign_up')}}" style="margin: 1px;" target="_parent">SIGN UP</a><a class="btn btn-outline-primary ms-md-2" role="button" href="{{url('sign_in')}}" style="margin: 1px;" target="_parent">SIGN IN</a>
            </div>
        </div>
    </nav>

    <section>
        <div data-bss-parallax-bg="true" style="height: 600px;background-image: url({{ asset("img/rms_web.jpg")}});background-position: center;background-size: cover;">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 350px;text-shadow: 0px 0px 20px var(--bs-body-color);backdrop-filter: blur(2px);">
                            <h1 class="text-uppercase fw-bold" style="font-size: 38px;color: var(--bs-body-bg);">RMS Technologies</h1>
                            <p class="my-3" style="font-size: 17px;color: var(--bs-body-bg);">Welcome! to RMS Technologies, your trusted partner for expert repair services of print machines and electronic devices. With a focus on quality, reliability, and innovation, we strive to deliver exceptional repair solutions tailored to your needs.</p>
                            <a class="btn btn-outline-light btn-lg me-2" role="button" href="{{url('contact')}}">About Us</a><a class="btn btn-outline-light btn-lg me-2" role="button" href="{{url('services')}}">Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <h5 class="text-center"><br>Do Any Kinds Electronic Job With Technological Strategies &amp; Competence.</h5>
    </div>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="bg-dark border rounded border-0 border-dark overflow-hidden">
                <div class="row g-0" style="border-width: 1.6px;border-style: groove;">
                    <div class="col-md-6" style="background: var(--bs-body-bg);"><img class="w-100 h-100 fit-cover" src="{{ asset("img/our_vision_pic.jpg")}}"></div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;background: #ffffff;">
                        <div class="text-white p-4 p-md-5">
                            <h1 class="text-center" style="color: var(--bs-emphasis-color);">Our Vision<br><br></h1>
                            <p class="text-center mb-4" style="color: var(--bs-emphasis-color);text-align: left;">"At RMS Technologies, our vision is to revolutionize the repair industry through innovative technology and exceptional service. We aim to streamline processes, enhance communication, and exceed customer expectations. With a commitment to quality and reliability, we empower businesses to thrive in a dynamic market environment. Join us in shaping the future of repair service management."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-2 row-cols-md-4">
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-hearts">
                            <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566ZM9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"></path>
                        </svg></div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">1000+</h2>
                        <p class="mb-0">Happy Clients</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-clock">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                        </svg></div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">24x7</h2>
                        <p class="mb-0">Support</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-check">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
                            <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"></path>
                        </svg></div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">90%+</h2>
                        <p class="mb-0">Client Retention</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-building-up">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0Z"></path>
                            <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1V1Z"></path>
                            <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"></path>
                        </svg></div>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0">25+</h2>
                        <p class="mb-0">Years of History</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <footer>
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center" style="filter: sepia(0%);">
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h2 class="fs-6">GET IN TOUCH</h2>
                    <ul class="list-unstyled">
                        <li><a class="link-secondary" href="#">RMS Technologies (Pvt) Ltd</a></li>
                        <li><a class="link-secondary" href="#"><span style="color: RGBA(86,94,100,var(--bs-link-opacity,1));">NO.218, 1/7,&nbsp;</span>Ranimadam<br>Housing Scheme<span style="color: RGBA(86,94,100,var(--bs-link-opacity,1));">,</span></a></li>
                        <li><a class="link-secondary" href="#"><span style="color: RGBA(86,94,100,var(--bs-link-opacity,1));">Enderamulla, Wattala, Sri Lanka</span></a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="fs-6">QUICK LINKS</h3>
                    <ul class="list-unstyled">
                        <li><a class="link-secondary" href="#"><span style="color: RGBA(86,94,100,var(--bs-link-opacity,1));">www.rmstech.lk</span></a></li>
                        <li><a class="link-secondary" href="#"><span style="color: RGBA(86,94,100,var(--bs-link-opacity,1));">info@rmstech.lk</span></a></li>
                        <li><a class="link-secondary" href="#"><span style="color: RGBA(86,94,100,var(--bs-link-opacity,1));">rmstech2000@gmail.com</span></a></li>
                        <li><a class="link-secondary" href="#"><span style="color: RGBA(86,94,100,var(--bs-link-opacity,1));">+94 77 7281060</span></a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="fs-6">WEB CREATED BY</h3>
                    <ul class="list-unstyled">
                        <li><a class="stretched-link link-secondary" href="#">SKP Creations™</a></li>
                        <li><a class="link-secondary" href="#">www.skpcreations.lk</a></li>
                        <li><a class="link-secondary" href="#">skpasindu.malinda@gmail.com</a></li>
                        <li><a class="link-secondary" href="#">+94 71 7077542</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                    <div class="fw-bold d-flex align-items-center mb-2"><img src="{{ asset("img/RMS%20png.png")}}" style="width: 225px;"></div>
                    <p class="text-muted copyright">Technological Strategies &amp; Competence.</p>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center pt-3">
                <p class="text-muted mb-0">Copyright © 2024 All Rights Reserved.</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook" data-bss-hover-animate="bounce">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                        </svg></li>
                    <li class="list-inline-item" data-bss-hover-animate="bounce"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram" data-bss-hover-animate="bounce">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="{{ asset("bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{ asset("js/bs-init.js")}}"></script>
    <script src="{{ asset("js/Lightbox-Gallery-baguetteBox.min.js")}}"></script>
    <script src="{{ asset("js/Lightbox-Gallery.js")}}"></script>
    <script src="{{ asset("js/Simple-Slider-swiper-bundle.min.js")}}"></script>
    <script src="{{ asset("js/Simple-Slider.js")}}"></script>
    <script src="{{ asset("js/js/jquery.min.js")}}"></script>
    <script src="{{ asset("js/js/sidebar.js")}}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SWEETIFY-Indulge in the Sweetest Delights!Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <!--<link href="{{url('website/img/favicon.ico')}}" rel="icon">-->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Libraries Stylesheet -->
    <link href="{{url('website/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('website/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('website/css/style.css')}}" rel="stylesheet">
    <link href="{{url('website/css/extra-style.css')}}" rel="stylesheet">
</head>

<body>
@include('sweetalert::alert')

    <div class="container">
        <div class="text-center header">
            <h1 class="text-center text-primary">Login </h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{url('/Login')}}" method="post" class="border border-dark p-2" id="login_form">
                    @csrf
                    <div class="login-input-main mx-2 mt-5">
                        <div class="input-group flex-nowrap login-input loginInputWithIcon ">
                            <span class="input-group-text loginInputIcon"><i class="bi bi-person-fill"></i></span>
                            <input type="email" name="email"id="login" size="30"
                                placeholder="Enter Register Email" class="form-control logininput" >
                        </div>
                        <!-- <input type="text" class="form-control"  placeholder="Type User Name"> -->
                        @error('email')
                        <p style="color: red;">{{$message}}</p>
                        @enderror
                        
                    </div>

                    <div class="login-input-main mx-2">
                        <div class="input-group flex-nowrap login-input loginInputWithIcon mt-4">
                            <span class="input-group-text loginInputIcon" id="addon-wrapping"><i
                                    class="bi bi-lock-fill"></i></span>
                            <input type="password" name="password" 
                                placeholder="Enter Password" class="form-control">
                        </div>
                        @error('password')
                        <p style="color: red;">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group m-2 p-3">
                        <a href="{{url('/ForgotPassword')}}" class="float-right text-primary" style="text-decoration: underline;">Forogot Password?</a>
                    </div>
                    <div class="form-group mx-3 p-3">
                        <button class="bg-primary btn-lg text-white btn-block rounded-pill" type="submit">Login<i
                                class="bi bi-door-open"></i></button>
                    </div>
                    <div class="form-group mt-2 mb-2 p-3 text-center">
                        <a href="Signup" class=" text-info space" style="text-decoration: underline;">Create An
                            Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">Mr</span>Dairy</h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2">123 Street, New York, USA</p>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                            <p class="mb-2">Mon – Sat, 8AM – 5PM</p>
                            <p class="mb-0">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; <a href="#">Domain</a>. All Rights Reserved. Designed by <a
                            href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('website/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('website/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('website/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('website/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('website/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{url('website/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{url('website/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('website/js/main.js')}}"></script>
</body>

</html>
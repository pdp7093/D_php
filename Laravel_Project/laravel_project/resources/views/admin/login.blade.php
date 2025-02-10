<?php 
$url_array = explode('/', $_SERVER['REQUEST_URI']); // current page url
$url = end($url_array);
$title = $url;

function active($currect_page)
{
    $url_array = explode('/', $_SERVER['REQUEST_URI']); // current page url
    $url = end($url_array);
    if ($url == "") {
        $url = "index";
    }
    if ($currect_page == $url) {
        echo 'active'; //class name in css 
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MrDairy - Ice Dairy Shop Admin Template | <?php  echo strtoupper(urlencode($title));?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <!--<link href="{{url('admin/img/favicon.ico')}}" rel="icon">-->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!--BootStrap incon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('admin/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/extra.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="position-relative text-center mb-3"><i
                            class="bi bi-person-circle display-1 text-primary"></i></h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class=" bg-light rounded p-4">

                        <form action="{{url('/admin-login')}}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <span class="float-start" style="color:#888c8d; margin-left:12px;">Admin
                                        Email</span>
                                    <input type="text" class="form-control p-4 " name="email" placeholder="Enter Admin Email" />
                                    @error('email')
                                    <p class="help-block text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <span class="float-start" style="color:#888c8d; margin-left:12px;">Password</span>
                                    <input type="password" class="form-control p-4" name="password" placeholder="Enter Your Password " />
                                        @error('password')
                                    <p class="help-block text-danger">{{$message}}</p>
                                    @enderror

                                </div>
                            </div>

                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5 mb-5" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!--Footer Section-->
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
    <script src="{{url('admin/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('admin/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('admin/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('admin/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('admin/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{url('admin/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{url('admin/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('admin/js/main.js')}}"></script>


</body>

</html>
<?php $url_array = explode('/', $_SERVER['REQUEST_URI']); // current page url
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
    <title>iCREAM - Ice Cream Shop admin Template | <?php  echo strtoupper(urlencode($title));?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <!--<link href="{{url('admin/img/favicon.ico')}}" rel="icon">-->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

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
    @include('sweetalert::alert')

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>

                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="/" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Mr</span>Dairy</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="dashboard" class="navbar-brand mx-5 d-none d-lg-block">
                            <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Mr</span>Dairy</h1>
                        </a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 mx-5">

                        <a href="Manage_Users" class="nav-item nav-link <?php echo active('Manage_Users'); ?>">Users</a>
                        <a href="Manage_Categories"
                            class="nav-item nav-link <?php echo active('Manage_Categories'); ?>">Categories</a>
                        <a href="Manage_Products" class="nav-item nav-link <?php echo active('Manage_Products'); ?>">
                            Products</a>
                        <a href="Manage_Orders"
                            class="nav-item nav-link <?php echo active('Manage_Orders'); ?>">Orders</a>
                        <a href="Manage_Contact"
                            class="nav-item nav-link <?php echo active('Manage_Contact'); ?>">Contact</a>

                    </div>
                    <div class="navbar-nav ml-auto py-0 mx-5">
                        @if(session('aemail'))
                        <a href="{{url('admin-logout')}}" class="btn btn-outline-danger">Logout</a>
                        @else
                        <a href="{{url('admin-login')}}" class="btn btn-outline-primary">Admin Login</a>
                        @endif
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
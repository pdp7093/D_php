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

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Musico</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('website/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('website/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('website/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('website/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('website/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('website/css/audioplayer.css')}}">
    <link rel="stylesheet" href="{{url('website/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('website/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{url('website/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('website/css/slick.css')}}">
    <link rel="stylesheet" href="{{url('website/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{url('website/css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{url('/responsive.')}}"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="/">
                                        <img src="{{url('website/img/logo.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="<?php echo active('index'); ?>" href="/">home</a></li>
                                            <li><a href="About" class="<?php echo active('About'); ?>">About</a></li>

                                            <li><a href="Track" class="<?php echo active('Tracks'); ?>">tracks</a></li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog">blog</a></li>
                                                    <li><a href="single-blog">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="elements">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="float-right ">
                                    <a href="Profile" class="btn btn-lg text-white border rounded-pill">Profile</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
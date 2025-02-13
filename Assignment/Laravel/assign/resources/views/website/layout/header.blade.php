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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('website/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{url('website/css/style.css')}}">
    <title>DailyTales | Every Day, A New Story</title>
</head>

<body>
@include('sweetalert::alert')
    <!--Header Section-->
    <section class="header">
        <div class="container-fluid position-relative nav-bar p-0">
            <div class="container-lg position-relative p-0 " style="z-index: 9;">
                <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0 pt-4">
                    <a href="/" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary">Daily<span class="text-secondary bg-primary">Tales</span>
                        </h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between " id="navbarCollapse">
                        <div class="navbar-nav float-left">
                            <a href="/" class="navbar-brand mx-4 d-none d-lg-block">
                                <h1 class="m-0 display-4 text-primary title ">Daily<span
                                        class="text-secondary">Tales</span></h1>
                            </a>
                        </div>
                        <div class="navbar-nav mr-4 py-0 float-right">
                            <a href="/" class="nav-item nav-link <?php echo active('index'); ?>">Home</a>
                            <a href="About" class="nav-item nav-link <?php echo active('About'); ?>">About</a>
                            <a href="Blog" class="nav-item nav-link <?php echo active('Blog'); ?>">Blog</a>
                        </div>
                        <div class="navbar-nav mr-4 py-0 float-right  ">
                            @if (session('username'))
                                <a href="{{url('/Profile')}}"
                                    class="nav-item nav-link border border-1 border-dark<?php    echo active('Profile'); ?>rounded-pill">
                                    <i class="bi bi-person">{{session('username')}}</i></a>
                            @else
                                <a href="{{url('/Login')}}"
                                    class="nav-item nav-link border border-1 border-dark<?php    echo active('Profile'); ?>rounded-pill">
                                    <i class="bi bi-person">Login</i></a>
                            @endif

                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </section>
    <!--Header Section-->
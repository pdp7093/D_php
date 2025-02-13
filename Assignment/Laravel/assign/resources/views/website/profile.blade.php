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
    <section class="">
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
                                    <i class="bi bi-person">Profile</i></a>
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
    <!--Content Section-->
    <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center">
                <div class="col col-lg-9 col-xl-8">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row"
                            style="background-color: #000; height:210px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="{{('website/upload/customers/'.$data->image)}}"
                                    alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                    style="width: 150px; z-index: 1">
                                <button type="button" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-outline-dark text-body" data-mdb-ripple-color="dark"
                                    style="z-index: 1;">
                                    Edit profile
                                </button>
                            </div>
                            <div class="ms-3" style="margin-top: 130px;">
                               <h2>{{$data->firstname}}{{$data->lastname}}</h2>
                               <h4>{{$data->username}}</h4> 
                               
                            </div>
                        </div>
                        <div class="p-4 text-black bg-body-tertiary">
                            <div class="d-flex justify-content-end text-center py-1 text-body">
                                <div>
                                    <p class="mb-1 h5">253</p>
                                    <p class="small text-muted mb-0">Blog</p>
                                </div>
                                <div class="px-3">
                                    <p class="mb-1 h5">1026</p>
                                    <p class="small text-muted mb-0">Followers</p>
                                </div>
                                <div>
                                    <p class="mb-1 h5">478</p>
                                    <p class="small text-muted mb-0">Following</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5  text-body">
                                <p class="lead fw-normal mb-1">Details</p>
                                <div class="p-4 bg-body-tertiary">
                                    <p class="font-italic mb-1">{{$data->email}}</p>
                                    <p class="font-italic mb-1">{{$data->mobile}}</p>
                                    <p class="font-italic mb-0">{{$data->gender}}</p>
                                </div>
                            </div>
                            <div class="d-grid gap-2">

                                <a href="{{url('/CreateBlog')}}" class="btn btn-outline-info btn-lg mb-4">Create Blog</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4 text-body">

                                <p class="lead fw-normal mb-0">Recent Blog</p>
                                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                            </div>
                            <div class="row g-2  border rounded-3 mb-4 mt-4 ">
                                <div class="col p-2">
                                    <div class=" card-body">
                                        Body Area
                                    </div>
                                    
                                </div>
                                <div class="col p-2">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(108).webp" class="card-img " alt="Card-Image">
                                    </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Content Section-->

<!--Footer Section Start-->
<section class="footer mt-5"></section>
<!--Footer Section End-->


<script src="{{url('website/js/bootstrap.js')}}"></script>

</body>
</html>
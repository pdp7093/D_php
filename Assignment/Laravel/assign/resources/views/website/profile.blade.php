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

    <!--Header Section-->
    <section class="profile_header">
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
                            <a href="Profile"
                                class="nav-item nav-link border border-1 border-dark<?php echo active('Profile'); ?>rounded-pill">
                                <i class="bi bi-person">Login</i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </section>
    <!--End Header Section-->

    <!--Content Section-->
    <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center">
                <div class="col col-lg-9 col-xl-8">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row"
                            style="background-color: #000; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                                    alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                    style="width: 150px; z-index: 1">
                                <button type="button" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-outline-dark text-body" data-mdb-ripple-color="dark"
                                    style="z-index: 1;">
                                    Edit profile
                                </button>
                            </div>
                            <div class="ms-3" style="margin-top: 130px;">
                                <h5>Andy Horwitz</h5>
                                <p>New York</p>
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
                                <p class="lead fw-normal mb-1">About</p>
                                <div class="p-4 bg-body-tertiary">
                                    <p class="font-italic mb-1">Web Developer</p>
                                    <p class="font-italic mb-1">Lives in New York</p>
                                    <p class="font-italic mb-0">Photographer</p>
                                </div>
                            </div>
                            <div class="d-grid gap-2">

                                <a href="Create Blog" class="btn btn-outline-info btn-lg mb-4">Create Blog</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4 text-body">

                                <p class="lead fw-normal mb-0">Recent Blog</p>
                                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                            </div>
                            <div class="row g-2  border rounded-3 mb-4 mt-4 bg-danger">
                                <div class="col p-2">
                                    <div class=" card-body bg-primary">
                                        Body Area
                                    </div>
                                    
                                </div>
                                <div class="col p-2">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(108).webp" class="card-img bg-secondary" alt="Card-Image">
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
    <section class="footer mt-5">

    </section>

    <script src="{{url('website/js/bootstrap.js')}}"></script>
    <!--Footer Section End-->
</body>

</html>
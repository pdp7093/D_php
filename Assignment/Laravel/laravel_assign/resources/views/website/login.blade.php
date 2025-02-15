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

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Markedia - Marketing Blog Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{url('images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{url('images/apple-touch-icon.png')}}">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet"> 
    
    <!-- Bootstrap core CSS -->
    <link href="{{url('website/css/bootstrap.css')}}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{url('website/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('style.css')}}" rel="stylesheet">

    <!-- Animate styles for this template -->
    <link href="{{url('website/css/animate.css')}}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{url('website/css/responsive.css')}}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{url('website/css/colors.css')}}" rel="stylesheet">

    <!-- Version Marketing CSS for this template -->
    <link href="{{url('website/css/version/marketing.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    @include('sweetalert::alert')
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="{{url('/Login')}}" method="post">
                                        @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <h1 class="m-0  text-primary">Daily<span
                                                    class="text-secondary bg-dark">Tales</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" name="username" class="form-control form-control-lg" />
                                            <label class="form-label" for="username">Username</label>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="password" name="password"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="password">Password</label>
                                        </div>

                                        <div class="form-group mx-3 p-3 ">
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-dark btn-lg btn-block"
                                                    type="submit">Login<i
                                                        class="bi bi-box-arrow-in-right"></i></button>
                                            </div>
                                        </div>
                                        <a class="small text-muted" href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                                href="{{url('/Register')}}" style="color: #393f81;">Register here</a></p>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer Section Start-->
    <section class="footer mt-5"></section>
    <!--Footer Section End-->


    <script src="{{url('website/js/bootstrap.js')}}"></script>

</body>
</html>
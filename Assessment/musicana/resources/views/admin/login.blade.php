<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{url('admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url('admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('admin/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
@include('sweetalert::alert')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src={{ url('admin/images/icon/logo.png') }} alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action={{ url('/AdminLogin') }} method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group mb-3 float-right">
                                   <a href="{{ url('/Register') }}">Create An Account</a>
                                </div>
                                <div class="login-checkbox">
                                    
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>

                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{url('admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{url('admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{url('admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{url('admin/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{url('admin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{url('admin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{url('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{url('admin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('admin/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{url('admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{url('admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{url('admin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{url('admin/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{url('admin/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
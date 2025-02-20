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
    <title>Admin Register</title>

    <!-- Fontfaces CSS-->
    <link href="{{url('admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url('admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet"
        media="all">
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
            <section class="vh-100" style="background-color: #eee;">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card text-black" style="border-radius: 25px;">
                                <div class="card-body p-md-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Admin Sign up</p>

                                            <form action="{{url('/Register')}}" method="post" class="mx-1 mx-md-4">
                                                @csrf
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                        <input type="text" id="form3Example1c" class="form-control" name="name"/>
                                                        <label class="form-label" for="form3Example1c">Your Name</label>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                        <input type="email" id="form3Example3c" class="form-control" name="email" />
                                                        <label class="form-label" for="form3Example3c">Your
                                                            Email</label>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                        <input type="password" id="form3Example4c"
                                                            class="form-control" name="password"/>
                                                        <label class="form-label" for="form3Example4c">Password</label>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                        <input type="password" id="form3Example4cd"
                                                            class="form-control" name="password1"/>
                                                        <label class="form-label" for="form3Example4cd">Repeat your
                                                            password</label>
                                                    </div>
                                                </div>

                                                <div class=" mx-4 mb-3 mb-lg-4">
                                                    <button type="submit" class="btn btn-block btn-primary btn-lg">Register</button>
                                                </div>
                                                <div class="mx-4 mb-3 mb-lg-4">
                                                    <a href="{{url('/AdminLogin')}}" class="text-info">Already have an account</a>
                                                </div>
                                            </form>

                                        </div>
                                        <div
                                            class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                            <img src={{ url('admin/images/icon/logo.png') }} alt="CoolAdmin" class="img-fluid">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
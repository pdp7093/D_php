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
<link rel="shortcut icon" href="{{url('website/images/favicon.ico')}}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{url('website/images/apple-touch-icon.png')}}">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="{{url('website/css/bootstrap.css')}}" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="{{url('website/css/font-awesome.min.css')}}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{url('website/style.css')}}" rel="stylesheet">

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

    <div id="wrapper">
        <header class="market-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="marketing-index.html"><img
                            src="{{url('website/images/version/market-logo.png')}}" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="marketing-index.html">Home</a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link" href="{{ url('/Blog') }}">Blog</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="marketing-contact.html">Contact Us</a>
                            </li>
                        </ul>
                        <div class="mt-3">
                            @if (!session('username'))
                                <a href="{{ url('/Login') }}" class="btn btn-dark text-center">Login</a>
                            @else
                                <a href="{{ url('/Profile') }}" class="btn text-center">Profile</a>
                            @endif

                        </div>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
    
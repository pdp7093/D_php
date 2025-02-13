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
    <section class="" style="background-color: #9A616D;">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col col-xl-12">
                    <div class="card" style="border-radius: 0rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block" style="background-color:#e8e6e6">
                                <img src="{{url('website/img/register.jpg')}}" alt="login form" class="img-fluid"
                                    height="100%"/>
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background-color:#e8e6e6">
                                <div class="card-body p-3 p-lg-5 text-black">

                                    <form action="{{url('/Signup')}}" method="post" class="" id="login_form"
                                        enctype="multipart/form-data">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <h1 class="m-0  text-primary">Daily<span
                                                    class="text-secondary bg-dark">Tales</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3 border-bottom" style="letter-spacing: 1px;">
                                            Create An Account</h5>


                                        @csrf
                                        <div class="form-group  mb-3">
                                            <label for="username">Enter Your Username</label>
                                            <input type="text" name="username" id="username"
                                                placeholder="Enter Username" class="form-control">
                                            @error('username')
                                                <p class="help-block text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2 mb-3 row">
                                            <label for="" class="col-lg-12">Enter Full Name</label><br>
                                            <div class="col-lg-6">
                                                <input type="text" name="firstname" id="firstname"
                                                    placeholder="Enter Firstname" class="form-control">
                                                @error('firstname')
                                                    <p class="help-block text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" name="lastname" id="lastname"
                                                    placeholder="Enter Lastname" class="form-control">
                                                @error('lastname')
                                                    <p class="help-block text-danger">{{$message}}</p>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group  mb-3">
                                            <label for="email">Enter Your Email</label>
                                            <input type="email" name="email" id="email" placeholder="Enter email"
                                                class="form-control">
                                            @error('email')
                                                <p class="help-block text-danger">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group  mb-3">
                                            <label for="mobile">Enter Your Mobile Number</label>
                                            <input type="text" name="mobile" id="mobile"
                                                placeholder="Enter mobile number" class="form-control">
                                            @error('mobile')
                                                <p class="help-block text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Select Your Gender</label>

                                            <div class="form-check mb-3 mt-2">
                                                <input type="radio" name="gender" value="Male" class="form-check-input"
                                                    id="Male">
                                                <label class="form-check-label" for="Male">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input type="radio" name="gender" value="Female"
                                                    class="form-check-input" id="Female">
                                                <label class="form-check-label" for="Female">
                                                    Female
                                                </label>
                                            </div>
                                            @error('gender')
                                                <p class="help-block text-danger">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="image">Upload Your Profile Image</label>
                                            <input type="file" name="image" id="image" class="form-control">
                                            @error('image')
                                                <p class="help-block text-danger">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group  mb-3">
                                            <label for="password">Enter Your Password</label>
                                            <input type="password" name="password" id="password"
                                                placeholder="Enter password" class="form-control">
                                            @error('password')
                                                <p class="help-block text-danger">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group mx-3 p-3 ">
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-outline-primary btn-lg btn-block rounded-pill"
                                                    type="submit">Signup<i
                                                        class="bi bi-box-arrow-in-right"></i></button>
                                            </div>
                                        </div>
                                        <div class="form-group mt-2 mb-2 p-3 text-center">
                                            <a href="{{url('/Login')}}" class=" text-info space "
                                                style="text-decoration: underline;">Already Have
                                                Account</a>
                                        </div>
                                        <div class="form-group p-3">
                                            <a class="text-muted mb-5 pb-lg-2" href="#!">Forgot password?</a>
                                        </div>

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
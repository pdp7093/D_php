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
    <link rel="stylesheet" href="{{url('website/css/mycss.css')}}">
    <link rel="stylesheet" href="{{url('website/css/forgot.css')}}">
    <!-- <link rel="stylesheet" href="{{url('/responsive.')}}"> -->
</head>

<body>
    @include('sweetalert::alert')
    <div class="forgot-password-box">
        <form action={{url('/ResetPassword/' . $data->email)}} method="post">
            @csrf
            <h2>Forgot Password</h2>
            <p>Enter Password</p>

            <div class="form-group">
                <label for="password"></label>
                <input type="password" name="password" placeholder="Enter your new password"  class="form-control">
            </div>
            <div class="form-group">
                <label for="re_password"></label>
                <input type="password" name="re_password" placeholder="Re-enter your new password"  class="form-control">
            </div> 
            <button type="submit" class="mt-3"> Reset Password</button>
            <a href="{{url('/Profile')}}" class="mt-3 float-right text-primary">Go Back</a>
        </form>
    </div>


    <!--/ footer end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/audioplayer.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

    <script>
        $(function () {
            $('audio').audioPlayer({

            });
        });
    </script>
</body>

</html>
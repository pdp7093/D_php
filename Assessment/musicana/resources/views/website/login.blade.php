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
@include('sweetalert::alert')
  <!-- Registration 13 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-9 col-lg-8 col-xl-5 col-xxl-4">
        <div class="card border border-light-subtle rounded-3 shadow-sm">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="text-center mb-3">
              <a href="#!">
                <img src="{{ url('website/img/favicon.png') }}" alt="BootstrapBrain Logo" width="" height="57">
              </a>
            </div>
            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Enter your login details</h2>
            <form action="{{url('/CheckLogin') }}" method="post">
                @csrf
              <div class="row gy-2 overflow-hidden">
             
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" >
                    <label for="email" class="form-label">Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" >
                    <label for="password" class="form-label">Password</label>
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="d-grid my-3">
                    <button class="btn btn-primary btn-lg" type="submit">Login</button>
                  </div>
                </div>
                <div class="col-12">
                  <p class="m-0 text-secondary text-center">Not have an account? <a href={{url('/Register')}} class="link-primary text-decoration-none">Register</a></p>
                </div>
                <div class="col-12">
                  <p class="m-0 text-secondary text-right"><a href="">Forgot Password?</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- header-start -->

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <div class="subscribe-from">
                                <form action="#">
                                    <input type="text" placeholder="Enter your mail">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                            <p class="sub_text">Esteem spirit temper too say adieus who direct esteem esteems luckily.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-5 offset-xl-1">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contact Me
                            </h3>
                            <ul>
                                <li><a href="#">conbusi@support.com
                                    </a></li>
                                <li><a href="#">+10 873 672 6782
                                    </a></li>
                                <li><a href="#">600/D, Green road, Kings Garden NewYork-6732</a></li>
                            </ul>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class=" fa fa-facebook "></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-7 col-md-6">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="footer_links">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">tracks</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://kit.fontawesome.com/aa8cf25ef0.js" crossorigin="anonymous"></script>
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
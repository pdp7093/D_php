<?php 
if(!isset($_SESSION['femail']))
{
	echo "<script>
            alert('Enter Email');
			window.location='ForgotPassword'
		</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iCREAM - Ice Cream Shop admin Template | Reset Password</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <!--<link href="{{url('admin/img/favicon.ico')}}" rel="icon">-->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('website/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('website/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('website/css/style.css')}}" rel="stylesheet">
    <link href="{{url('website/css/extra.css')}}" rel="stylesheet">
    <link href="{{url('website/css/forgot.css')}}" rel="stylesheet">
</head>

<body>
    @include('sweetalert::alert')
    <div class="forgot-password-box">
        <div class="border">
            <form action={{url('/ResetPassword')}} method="post">
                @csrf
                <h2>Forgot Password</h2>
                <p>Enter your Otp to reset your password</p>
                <div class="form-group">
                    <input type="otp" name="otp" placeholder="Enter your otp" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="password" placeholder="Enter your New Password"class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="re_password" placeholder="Re-Enter your New Password"class="form-control">
                </div>
                <button type="submit" class="mt-3" > Reset
                    Password</button>
                <a href="{{url('/ForgotPassword')}}" class="mt-3 float-right text-primary">Go Back</a>
            </form>
        </div>
    </div>

  
    <!--footer start-->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('website/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('website/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('website/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('website/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('website/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{url('website/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{url('website/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('website/js/main.js')}}"></script>
</body>

</html>
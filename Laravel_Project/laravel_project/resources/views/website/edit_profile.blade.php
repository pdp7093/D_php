<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SWEETIFY-Indulge in the Sweetest Delights!|Signup</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <!--<link href="{{url('website/img/favicon.ico')}}" rel="icon">-->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Libraries Stylesheet -->
    <link href="{{url('website/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('website/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('website/css/style.css')}}" rel="stylesheet">
    <link href="{{url('website/css/extra-style.css')}}" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="text-center header">
            <h1 class="text-center text-primary ">Edit Profile </h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form action="{{ url('/EditProfile/'.$data->id) }}" method="post" class="border border-dark p-2" id="login_form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-2 mb-3 row">
                        <label for="" class="col-lg-12">Enter Full Name</label><br>
                        <div class="col-lg-6">
                            <input type="text" name="firstname" id="firstname" placeholder="Enter Firstname"
                                class="form-control" value="{{ $data->firstname }}">
                            @error('firstname')
                                <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="lastname" id="lastname" placeholder="Enter Lastname"
                                class="form-control" value="{{ $data->lastname }}">
                            @error('lastname')
                                <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group  mb-3">
                        <label for="email">Enter Your Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter email" class="form-control"
                            value="{{ $data->email }}">
                        @error('email')
                            <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group  mb-3">
                        <label for="mobile">Enter Your Mobile Number</label>
                        <input type="text" name="mobile" id="mobile" placeholder="Enter mobile number"
                            class="form-control" value="{{ $data->mobile }}">
                        @error('mobile')
                            <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender">Select Your Gender</label>
                        <?php $gender = $data->gender;?>
                        <div class="form-check mb-3 mt-2">
                            <input type="radio" name="gender" value="Male" class="form-check-input" id="Male" <?php if ($gender == "Male") {
    echo "checked";
}?>>
                            <label class="form-check-label" for="Male">
                                Male
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input type="radio" name="gender" value="Female" class="form-check-input" id="Female" <?php if ($gender == "Female") {
    echo "checked";
}?>>
                            <label class="form-check-label" for="Female">
                                Female
                            </label>
                        </div>
                        @error('gender')
                            <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Upload Your Profile Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @error('image')
                            <p class="help-block text-danger">{{$message}}</p>
                        @enderror
                        <img src="{{ url('website/upload/customers/' . $data->image) }}" alt="" width="60rm"
                            class="mt-3">
                    </div>

                    <div class="form-group mx-3 p-3">
                        <button class="bg-primary btn-lg text-white btn-block rounded-pill"
                            type="submit">Update</button>

                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 control-group">
                           <a href="{{ url('/Profile') }}" class="text-right  mb-3"><h5 class="text-info m-3">Back</h5></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">Mr</span>Dairy</h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2">123 Street, New York, USA</p>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                            <p class="mb-2">Mon – Sat, 8AM – 5PM</p>
                            <p class="mb-0">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; <a href="#">Domain</a>. All Rights Reserved. Designed by <a
                            href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
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
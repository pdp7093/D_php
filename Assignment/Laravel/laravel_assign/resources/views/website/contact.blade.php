@extends('website.layout.main')
@section('content')


    <div class="page-title db">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2>Contact </h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->

    <section class="section lb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget-no-style">
                            <div class="newsletter-widget text-center align-self-center">
                                <h3>Subscribe Today!</h3>
                                <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                                <form class="form-inline" method="post">
                                    <input type="text" name="email" placeholder="Add your email here.." required
                                        class="form-control" />
                                    <input type="submit" value="Subscribe" class="btn btn-default btn-block" />
                                </form>
                            </div><!-- end newsletter -->
                        </div>

                        <div id="" class="widget">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->

                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Who we are</h4>
                                <p>Markedia is a personal blog for handcrafted, cameramade photography content, fashion
                                    styles from independent creatives around the world.</p>
                            </div>

                            <div class="col-lg-6">
                                <h4>How we help?</h4>
                                <p>If you’d like to write for us, <a href="#">advertise with us</a> or just say hello, fill
                                    out the form below and we’ll get back to you as soon as possible.</p>
                            </div>
                        </div><!-- end row -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-lg-12">
                                <form action={{url('/Contact')}} method="post" class="form-wrapper">
                                    <h4>Contact form</h4>
                                    @csrf
                                    <input type="text" class="form-control" name="name" placeholder="Your name"required>
                                    <input type="email" class="form-control"  name="email" placeholder="Email address" required>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"required>
                                    <textarea class="form-control" placeholder="Your message" name="message"></textarea>
                                    <button type="submit" class="btn btn-primary">Send <i
                                            class="fa fa-envelope-open-o"></i></button>
                                </form>
                            </div>
                        </div>
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

@endsection
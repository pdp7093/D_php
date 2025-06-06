@extends('website.layout.main')
@section('content')


    <div class="page-title db">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2> Marketing <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat
                            non. </small></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item active">Marketing</li>
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

                        <div class="widget">
                            <h2 class="widget-title">Recent Posts</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="marketing-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/small_07.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                            <small>12 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="marketing-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/small_08.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                            <small>11 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="marketing-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="upload/small_09.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                            <small>07 Jan, 2016</small>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->

                        <div id="" class="widget">
                            <h2 class="widget-title">Advertising</h2>
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Instagram Feed</h2>
                            <div class="instagram-wrapper clearfix">
                                <a class="" href="#"><img src="upload/small_09.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_01.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_02.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_03.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_04.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_05.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_06.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_07.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="upload/small_08.jpg" alt="" class="img-fluid"></a>
                            </div><!-- end Instagram wrapper -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Popular Categories</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">Marketing <span>(21)</span></a></li>
                                    <li><a href="#">SEO Service <span>(15)</span></a></li>
                                    <li><a href="#">Digital Agency <span>(31)</span></a></li>
                                    <li><a href="#">Make Money <span>(22)</span></a></li>
                                    <li><a href="#">Blogging <span>(66)</span></a></li>
                                    <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                    <li><a href="#">Video Tuts <span>(87)</span></a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->

                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-custom-build">
                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="marketing-single.html" title="">
                                        <img src="upload/market_blog_01.jpg" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div>
                                        <!-- end hover -->
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <div class="post-sharing">
                                        <ul class="list-inline">
                                            <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i>
                                                    <span class="down-mobile">Share on Facebook</span></a></li>
                                            <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i>
                                                    <span class="down-mobile">Tweet on Twitter</span></a></li>
                                            <li><a href="#" class="gp-button btn btn-primary"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div><!-- end post-sharing -->
                                    <h4><a href="marketing-single.html" title="">You can learn how to make money with your
                                            blog and videos</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enimcerat
                                        elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <small><a href="marketing-category.html" title="">Make Money</a></small>
                                    <small><a href="marketing-single.html" title="">24 July, 2017</a></small>
                                    <small><a href="#" title="">by Jack</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 2291</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="marketing-single.html" title="">
                                        <img src="upload/market_blog_02.jpg" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div>
                                        <!-- end hover -->
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <div class="post-sharing">
                                        <ul class="list-inline">
                                            <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i>
                                                    <span class="down-mobile">Share on Facebook</span></a></li>
                                            <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i>
                                                    <span class="down-mobile">Tweet on Twitter</span></a></li>
                                            <li><a href="#" class="gp-button btn btn-primary"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div><!-- end post-sharing -->
                                    <h4><a href="marketing-single.html" title="">The way to reach hundreds of thousands of
                                            customers is through the SEO</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enimcerat
                                        elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <small><a href="marketing-category.html" title="">Marketing</a></small>
                                    <small><a href="marketing-single.html" title="">21 July, 2017</a></small>
                                    <small><a href="#" title="">by Jack</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 666</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="marketing-single.html" title="">
                                        <img src="upload/market_blog_03.jpg" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div>
                                        <!-- end hover -->
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <div class="post-sharing">
                                        <ul class="list-inline">
                                            <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i>
                                                    <span class="down-mobile">Share on Facebook</span></a></li>
                                            <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i>
                                                    <span class="down-mobile">Tweet on Twitter</span></a></li>
                                            <li><a href="#" class="gp-button btn btn-primary"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div><!-- end post-sharing -->
                                    <h4><a href="marketing-single.html" title="">Ways to reach the world through mobile
                                            phones</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enimcerat
                                        elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <small><a href="marketing-category.html" title="">Technology</a></small>
                                    <small><a href="marketing-single.html" title="">20 July, 2017</a></small>
                                    <small><a href="#" title="">by Martin</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 441</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="marketing-single.html" title="">
                                        <img src="upload/market_blog_04.jpg" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div>
                                        <!-- end hover -->
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <div class="post-sharing">
                                        <ul class="list-inline">
                                            <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i>
                                                    <span class="down-mobile">Share on Facebook</span></a></li>
                                            <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i>
                                                    <span class="down-mobile">Tweet on Twitter</span></a></li>
                                            <li><a href="#" class="gp-button btn btn-primary"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div><!-- end post-sharing -->
                                    <h4><a href="marketing-single.html" title="">Would you like to work as a freelancer for
                                            lifetime?</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enimcerat
                                        elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <small><a href="marketing-category.html" title="">Technology</a></small>
                                    <small><a href="marketing-single.html" title="">20 July, 2017</a></small>
                                    <small><a href="#" title="">by Martin</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 8934</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="marketing-single.html" title="">
                                        <img src="upload/market_blog_05.jpg" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div>
                                        <!-- end hover -->
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <div class="post-sharing">
                                        <ul class="list-inline">
                                            <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i>
                                                    <span class="down-mobile">Share on Facebook</span></a></li>
                                            <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i>
                                                    <span class="down-mobile">Tweet on Twitter</span></a></li>
                                            <li><a href="#" class="gp-button btn btn-primary"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div><!-- end post-sharing -->
                                    <h4><a href="marketing-single.html" title="">Ten golden rules to be followed for a real
                                            team work</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enimcerat
                                        elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <small><a href="marketing-category.html" title="">Technology</a></small>
                                    <small><a href="marketing-single.html" title="">19 July, 2017</a></small>
                                    <small><a href="#" title="">by Martin</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 451</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="marketing-single.html" title="">
                                        <img src="upload/market_blog_06.jpg" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div>
                                        <!-- end hover -->
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <div class="post-sharing">
                                        <ul class="list-inline">
                                            <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i>
                                                    <span class="down-mobile">Share on Facebook</span></a></li>
                                            <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i>
                                                    <span class="down-mobile">Tweet on Twitter</span></a></li>
                                            <li><a href="#" class="gp-button btn btn-primary"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div><!-- end post-sharing -->
                                    <h4><a href="marketing-single.html" title="">Thanks to the Internet, there is no limit
                                            to what you will just try!</a></h4>
                                    <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et
                                        pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enimcerat
                                        elicerat eli nibh, maximus ac felis nec, maximus tempor odio.</p>
                                    <small><a href="marketing-category.html" title="">Technology</a></small>
                                    <small><a href="marketing-single.html" title="">19 July, 2017</a></small>
                                    <small><a href="#" title="">by Martin</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 192</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div>
                    </div>

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

@endsection
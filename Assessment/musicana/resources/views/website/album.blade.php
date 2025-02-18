@extends('website.layout.base')
@section('content')


    <!-- bradcam_area  -->
    <div class="bradcam_area breadcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>My Albums</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <!-- music_area  -->
    <div class="music_area music_gallery inc_padding">
        <div class="container">
            <div class="row align-items-center justify-content-center mb-20">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                        @foreach ($albums as $a)
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{url('admin/image/album/'.$a->cover_image)}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $a->name }}</h5>
                                    <p class="card-text">{{ $a->release_date }}</p>
                                    <a href="{{url('/view/'.$a->id)}}" class="btn btn-primary">View Album</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- music_area end  -->

    <!-- youtube_video_area  -->
    <div class="youtube_video_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="img/video/1.png" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>

                            <div class="hover_inner">
                                <span>New York Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="img/video/2.png" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>

                            <div class="hover_inner">
                                <span>New York Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="img/video/3.png" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>

                            <div class="hover_inner">
                                <span>New York Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_video">
                        <div class="thumb">
                            <img src="img/video/4.png" alt="">
                        </div>
                        <div class="hover_elements">
                            <div class="video">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=Hzmp3z6deF8">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>

                            <div class="hover_inner">
                                <span>New York Show-2018</span>
                                <h3><a href="#">Shadows of My Dream</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / youtube_video_area  -->

    <!-- contact_rsvp -->
    <div class="contact_rsvp">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text text-center">
                        <h3>Contact For RSVP</h3>
                        <a class="boxed-btn3" href="contact.html">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ contact_rsvp -->

@endsection
@extends('website.layout.base')
@section('content')
    <div class="bradcam_area breadcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>{{$data->name}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-3 col-lg-12 row border-bottom border-3 pb-2 border-dark">
        <div class="col-lg-6 ">
            <img src="{{ url('admin/image/album/' . $data->cover_image) }}" alt="" width="50%"
                class="rounded mx-auto d-block">
        </div>
        <div class="col-lg-6">
            <h5>Album Name: {{$data->name }}</h5>
            <h5>Release Date: {{$data->release_date }}</h5>
        </div>
    </div>

    <div class="container mt-3 mb-3">
        <h1 class="text-center">Latest Tracks</h1>
        <div class="row align-items-center justify-content-center mb-20">

            <div class="col-xl-10">
                <div class="row align-items-center">
                @foreach ($songs as $s)
                    <div class="col-xl-9 col-md-9">
                    

                            <div class="music_field">
                                <div class="thumb">
                                    <img src="{{ url('admin/song_images/' . $s->song_image) }}" alt="" width="50rm">
                                </div>
                                <div class="audio_name">
                                    <div class="name">
                                        <h4>{{ $s->song_name }}</h4>
                                        
                                    </div>
                                    <audio preload="auto" controls>
                                    <source src="{{ asset($s->file_path) }}" type="audio/mpeg">
                                    </audio>
                                </div>
                            </div>
                        
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="music_btn">
                            <a href="{{url('/Review/'.$s->id)}}" class="boxed-btn">Review</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
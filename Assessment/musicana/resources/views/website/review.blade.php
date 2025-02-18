@extends('website.layout.base')
@section('content')
    <div class="bradcam_area breadcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Review</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="text-center border-bottom mb-3">Review for {{ $data->song_name }}</h1>
        <form action="{{url('/Review/' . $data->id)}}" method="post" class="mb-3">
            @csrf
            <div class="form-group mb-3">
                <label for="song_name" class="form-label">Song Name</label>
                <input type="text" name="song_name" id="song_name" value={{ $data->song_name }} class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="email">User Email</label>
                <input type="email" name="email" id="email" value="{{ session(('uemail')) }}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" cols="10" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group mb-3">
                <button class="btn btn-outline-primary btn-lg btn-block">Submit</button>
            </div>
        </form>
    </div>
@endsection
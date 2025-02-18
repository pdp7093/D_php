@extends('admin.layout.base')
@section('content')
    <section style="margin-top:150px">
        <div class="section__content section__content--p30">
            <div class="container-fluid d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="card">
                        <div><a href={{url('/ManageMusic')}}
                                class="btn btn-outline-success m-3 float-right rounded-pill">Manage Music</a></div>
                        <div class="card-header">Add Albums</div>
                        <div class="card-body card-block">
                            <form action="{{ url('/AddMusic') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="form-label">Album:</label>
                                    <select name="album_id" class="form-control">
                                        @foreach($albums as $album)
                                            <option value="{{ $album->id }}">{{ $album->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('album_id')
                                            <div class="alert alert-warning" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label">Song Name:</label>
                                    <input type="text" name="song_name" class="form-control">
                                    @error('song_name')
                                            <div class="alert alert-warning" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label">Artist:</label>
                                    <input type="text" name="artist" class="form-control">
                                    @error('artist')
                                            <div class="alert alert-warning" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label">Upload MP3:</label>
                                    <input type="file" name="file" accept="audio/mp3" class="form-control">
                                    @error('file')
                                            <div class="alert alert-warning" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Song Image</label>
                                    <input type="file" name="song_image" class="form-control">
                                    @error('song_image')
                                            <div class="alert alert-warning" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn  btn-block rouned-pill btn-outline-primary">Upload Song</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
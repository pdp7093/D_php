@extends('admin.layout.base')
@section('content')
    <section style="margin-top:150px">
        <div class="section__content section__content--p30">
            <div class="container-fluid d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="card">
                        
                        <div class="card-header">Edit Albums</div>
                        <div class="card-body card-block">
                            <form action={{url('/Edit/'.$data->id)}} method="post" class="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa-solid fa-n"></i>
                                        </div>
                                        <input type="text" id="name" name="name" placeholder="Enter Album Name"
                                            class="form-control" value="{{ $data->name }}">
                                            <br>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa-solid fa-images"></i>
                                        </div>
                                        <input type="file" name="cover_image" id="cover_image"
                                            placeholder="Choose Album Image" class="form-control">
                                            <br>
                                        
                                    </div>
                                    <img src="{{ url('admin/image/album/'.$data->cover_image) }}" alt="" width="50rm" class="mt-3">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa-solid fa-calendar-days"></i>
                                        </div>
                                        <input type="date" id="release_date" name="release_date"
                                            placeholder="Select Release Date" class="form-control" value={{ $data->release_date }}>
                                            <br>
                                           
                                    </div>
                                </div>
                                <div class="form-actions form-group d-flex justify-content-center">
                                    <input type="submit" value="Edit"
                                        class="btn btn-block btn-outline-primary rounded-pill">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
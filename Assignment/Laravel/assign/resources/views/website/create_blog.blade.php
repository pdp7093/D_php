@extends('website.layout.base')
@section('content')

<div class="container mt-5">
    <h2 class="text-center ">Create a New Blog Post</h2>
</div>

<div class="container">
    <form action="{{url('/CreateBlog')}}" method="POST" enctype="multipart/form-data" class="form-control mt-5">
        @csrf
        <div class="form-group p-3 mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="category" class="form-select">
                @foreach ($data as $c)
                    <option value="{{$c->id}}">{{$c->cat_name}}</option>
                @endforeach
            </select>
            @error('category')
                <div class="alert alert-danger" role="alert">
                    <p>{{$message}}</p>
                </div>
            @enderror

        </div>
        <div class="form-group p-3 mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control">
            @error('title')
                <div class="alert alert-danger" role="alert">

                    <p>{{$message}}</p>
                </div>
            @enderror

        </div>

        <div class="form-group  p-3 mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" rows="5" class="form-control"></textarea>
            @error('content')
                <div class="alert alert-danger" role="alert">

                    <p>{{$message}}</p>
                </div>
            @enderror


            <div class="form-group p-3 mb-3">
                <label for="blog_image" class="form-label">Upload Image:</label>
                <input type="file" name="blog_image" class="form-control">
                @error('blog_image')
                    <div class="alert alert-danger" role="alert">

                        <p>{{$message}}</p>
                    </div>
                @enderror

                <div class="form-group p-3 mb-3">
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary btn-lg" type="submit">Publish</button>
                    </div>
                </div>


    </form>
</div>
@endsection
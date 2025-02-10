@extends('website.layout.base')
@section('content')

<div class="container mt-5">
    <h2 class="text-center ">Create a New Blog Post</h2>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <form action="" method="POST" enctype="multipart/form-data" class="form-control mt-5">
        @csrf
        <div class="form-group p-3 mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="category" class="form-select">
                <option value="Lifestyle">Lifestyle</option>
                <option value="Technology">Technology</option>
                <option value="Travel">Travel</option>
                <option value="Food">Food</option>
            </select>
        </div>
        <div class="form-group p-3 mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group  p-3 mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" rows="5" class="form-control"></textarea>
        </div>
        
        <div class="form-group p-3 mb-3">
            <label for="image" class="form-label">Upload Image:</label>
            <input type="file" name="image" class="form-control">

        </div>
        <div class="form-group p-3 mb-3">
            <div class="d-grid gap-2">
                <button class="btn btn-outline-primary btn-lg" type="submit">Publish</button>
            </div>
        </div>

    </form>
</div>
@endsection
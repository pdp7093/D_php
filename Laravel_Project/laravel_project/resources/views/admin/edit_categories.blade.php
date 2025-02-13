@extends('admin.layout.struct')
@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container-fluid text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Categories</h1>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Categories</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->


<!-- Edit Categorie Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Edit Categories</h1>

            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-10 ">
               
                <div class="contact-form bg-light rounded p-5 mystyle">

                    <div id="success"></div>

                    <form novalidate="novalidate" method="post" action="{{url('/Edit_Categories/'.$data->id)}}" class="p-3 mt-5"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="categorie_title" class="ms-3">Category Title</label>
                            <input type="text" class="form-control p-4" id="categories_title"
                                placeholder="Enter Categorie Name" name="categories_title" value={{$data->categories_title}}/>
                           
                        </div>
                        <div class="control-group">
                            <label for="Categorie_title" class="ms-3">Category Image</label>
                            <input type="file" class="form-control p-3" id="categories_image"
                                placeholder="Enter Categorie Name" required="required" name="categories_image" />
                            <img src="{{ url('admin/img/Category/'.$data->categories_image) }}" alt="Category Image" width="60rm" class="mt-3">
                        </div>
                        <div>
                            <button class="btn btn-outline-primary btn-block py-3 px-5 mt-5 add_this" type="submit"
                                id="add_Categories">Edit Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Edit Categorie End -->
@endsection
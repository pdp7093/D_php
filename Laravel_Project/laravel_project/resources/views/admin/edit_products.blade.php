@extends('admin.layout.struct')
@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container-fluid text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Products</h1>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Products</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->


<!-- Edit Product Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Edit Products</h1>

            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-12 ">
                <div class="contact-form bg-light rounded p-5 mystyle border border-dark rounded-3">

                    <div id="success"></div>

                    <form name="sentMessage" id="Edit_ProductForm" novalidate="novalidate" method="post"
                        action="{{url('/Edit_Products/'.$data->id)}}" class="p-3 mt-5" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="product_title" class="ms-3">Product Title</label>
                            <input type="text" class="form-control p-4" id="product_title"
                                placeholder="Enter Product Name" name="product_title" value="{{$data->product_title}}" />

                        </div>
                        <div class="form-group  mb-4">
                            <label for="product_image" class="ms-3">Product Image</label>
                            <input type="file" class="form-control p-4" id="product_image"
                                placeholder="Enter Product Name" name="product_image" />
                            <img src="{{ url('admin/img/Product/'.$data->product_image) }}" alt="Product Image" width="50rm" class="mt-3">

                        </div>
                        <div class="form-group  mb-4">
                            <label for="product_weight" class="ms-3">Product Weight</label>
                            <input type="text" class="form-control p-4" id="product_weight"
                                placeholder="Enter Product Weight" name="product_weight" value="{{$data->product_weight }}"/>
                            <p class="help-block text-danger" ></p>
                        </div>

                        <div class=" form-group  mb-4">
                            <label for="product_price" class="ms-3">Product Price</label>
                            <input type="text" class="form-control p-4" id="product_price"
                                placeholder="Enter Product Price" name="product_price" value="{{$data->product_price }}"/>
                        </div>

                        <div class=" form-group  mb-4">
                            <label for="qty" class="ms-3">Product Qty</label>
                            <input type="number" class="form-control p-4" id="qty" placeholder="Enter Product Price"
                                name="qty" value="{{$data->p_qty }}"/>
                        </div>

                        <div class="form-group  mb-4">
                            <label for="product_descp" class="ms-3">Product Descp</label>
                            <textarea class="form-control p-4" rows="3" id="product_descp"
                                placeholder="Enter Product Description" name="product_descp">{{$data->product_descp }}</textarea>
                        </div>
                        <div class="form-group  mb-4">
                            <button class="btn btn-outline-primary btn-block py-3 px-5 float-center add_this"
                                type="submit" id="add_product">Edit Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Edit Product End -->
@endsection
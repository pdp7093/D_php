@extends('admin.layout.struct')
@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container-fluid text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Products</h1>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Products</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->


<!-- Add Product Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Add Products</h1>

            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-12 ">

                <a href="Manage_Products"
                    class=" float-right btn btn-info btn-lg rounded-pill rounded-3 mx-5 mt-4 ">Manage
                    Products</a>
                <div class="contact-form bg-light rounded p-5 mystyle border border-dark rounded-3">

                    <div id="success"></div>

                    <form name="sentMessage" id="Add_ProductForm" novalidate="novalidate" method="post"
                        action="{{url('/Add_Products')}}" class="p-3 mt-5" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="category" class="ms-3" class="form-label">Select Category of Product</label>
                            <select name="category" class="form-select mx-3">
                                <option>Select an Option</option>
                                @foreach ($data as $c)
                                    <option value="{{$c->id}}">{{$c->categories_title}}</option>
                                @endforeach()
                            </select>
                            @error('category')
                                <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>


                        <div class="form-group mb-4">
                            <label for="product_title" class="ms-3">Product Title</label>
                            <input type="text" class="form-control p-4" id="product_title"
                                placeholder="Enter Product Name" name="product_title" />

                            @error('product_title')
                                <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group  mb-4">
                            <label for="product_image" class="ms-3">Product Image</label>
                            <input type="file" class="form-control p-4" id="product_image"
                                placeholder="Enter Product Name" name="product_image" />

                            @error('product_image')
                                <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group  mb-4">
                            <label for="product_weight" class="ms-3">Product Weight</label>
                            <input type="text" class="form-control p-4" id="product_weight"
                                placeholder="Enter Product Weight" name="product_weight" />
                            <p class="help-block text-danger"></p>
                            @error('product_weight')
                                <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class=" form-group  mb-4">
                            <label for="product_price" class="ms-3">Product Price</label>
                            <input type="text" class="form-control p-4" id="product_price"
                                placeholder="Enter Product Price" name="product_price" />

                            @error('product_price')
                                <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class=" form-group  mb-4">
                            <label for="qty" class="ms-3">Product Qty</label>
                            <input type="number" class="form-control p-4" id="qty" placeholder="Enter Product Price"
                                name="qty" />
                            @error('qty')
                                <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group  mb-4">
                            <label for="product_descp" class="ms-3">Product Descp</label>
                            <textarea class="form-control p-4" rows="3" id="product_descp"
                                placeholder="Enter Product Description" name="product_descp"></textarea>
                            @error('product_descp')
                                <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group  mb-4">
                            <button class="btn btn-outline-primary btn-block py-3 px-5 float-center add_this"
                                type="submit" id="add_product">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Product End -->
@endsection
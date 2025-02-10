@extends('admin.layout.struct')
@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container-fluid text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Prodcuts</h1>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Products</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->


<!-- Add Products Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Manage Products</h1>

            </div> 
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-12">
                <a href="Add_Products" class="float-right btn btn-info rounded-pill m-3  mx-5 mt-4 rounded-3 btn-lg">Add
                    Products</a>
                <div class="contact-form bg-light">
                    
                    <table class="table table-hover table-responsive mt-5 p-3 text-center">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>NO.</th>
                                <th>Product Category</th>
                                <th>Products Name</th>
                                <th>Products Image</th>
                                <th>Products Weight</th>
                                <th>Products Price</th>
                                <th colspan="3">Products Descp</th>
                                <th>Products Qty</th>
                                <th>Products Status</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $mp)
                                <tr style="height:50px; border:2px solid black">
                                    <td>{{$mp->id}}</td>
                                    <td>{{$mp->categories_title}}</td>
                                    <td>{{$mp->product_title}}</td>
                                    <td><img src="{{url('admin/img/Product/'.$mp->product_image)}}" alt="Dummy Data" width="50rm"></td>
                                    <td>{{$mp->product_weight}}</td>
                                    <td >{{$mp->product_price}}</td>
                                    <td colspan="3" >{{$mp->product_descp}}</td>
                                    <td>{{$mp->p_qty}}</td>
                                    <td>{{$mp->p_status}}</td>
                                    <td>
                                        <a href="edit_products" class="btn  btn-outline-primary">Edit</a>
                                    </td>
                                    <td>
                                    <a href="{{url('/Manage_Products/'.$mp->id)}}" class="btn  btn-outline-warning">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Products End -->
@endsection
@extends('admin.layout.struct')
@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container-fluid text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Prodcuts</h1>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Orders</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->


<!-- Add Orders Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Manage Orders</h1>

            </div>
        </div>
        <div class="row justify-content-center overflow-auto">

            <div class="col-lg-12">
                <a href="Add_Orders" class="float-right btn btn-info rounded-pill m-3  mx-5 mt-4 rounded-3 btn-lg">Add
                    Orders</a>
                <div class="contact-form bg-light rounded p-5 ">
                    <div id="success"></div>
                    <table class="table table-hovertable-responsive col mt-5 text-center">

                        <thead class="bg-primary text-white">
                            <tr>
                                <th>NO.</th>
                                <th>Product Id.</th>
                                <th>Customer Id.</th>
                                <th>Order Qty</th>
                                <th>Weight</th>
                                <th>Total Amount</th>
                                <th>Orders Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $o)
                                <tr>
                                    <td>1</td>
                                    <td>{{$o->p_name}}</td>
                                    <td>{{$o->firstname.$o->lastname}}</td>
                                    <td>{{$o->o_qty}}</td>
                                    <td>{{$o->p_weight}}</td>
                                    <td>{{$o->total_amount}}</td>
                                    <td>{{$o->o_status}}</td>
                                    <td>
                                        <a href="edit_products" class="btn  btn-outline-primary">Edit</a>
                                        <a href="{{url('/Manage_Orders/'.$o->id)}}" class="btn  btn-outline-warning">Delete</a>
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
<!-- Add Orders End -->
@endsection
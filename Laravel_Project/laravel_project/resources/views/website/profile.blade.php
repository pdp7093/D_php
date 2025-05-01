@extends('website.layout.struct')
@section('content')
    <div class="container mt-5 ">

        <div class="col-lg-12 d-flex">
            <div class="col-lg-6 border">
                <div class="col-lg-12 p-3">

                    <img src="{{url('website/upload/customers/' . $data->image)}}" alt=""
                        style=" border-radius: 8px; height:150px;padding: 5px; box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5); display: block; margin: auto;">
                    <div class="mt-3">
                        <a href="{{url('/EditProfile/'. $data->id)}}" class="btn btn-outline-secondary mx-1">Edit Profile</a>
                        <a href="{{url('/ForgotPassword')}}" class="btn btn-outline-danger mx-1">Forgot Password</a>
                        
                        <a href="{{url('/Logout')}}" class="btn btn-outline-dark mx-1">Logout</a>
                        <a href="{{url('/ViewCart')}}" class="btn btn-outline-primary mx-1 mt-2">View Cart</a>
                    </div>
                </div>
                <div class="border-top border-2 border-dark p-3" >
                    <table class="table col-lg-12">
                        <tbody>
                            <tr class="mb-4">
                                <th>Full Name:</th>
                                <td>{{$data->firstname . $data->lastname}}</td>
                            </tr>
                            <tr class="mb-4">
                                <th>Email:</th>
                                <td>{{$data->email}}</td>
                            </tr>

                            <tr class="mb-4">
                                <th>Mobile:</th>
                                <td>{{$data->mobile}}</td>
                            </tr>
                            <tr class="mb-4">
                                <th>Gender</th>
                                <td>{{$data->gender}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
              
            </div>

            <div class="col-lg-6  mx-2 h-100">
                <div style="font-family:'Times New Roman',Times,serif">
                    <h4 class="border-bottom m-3 text-center bg-info text-white rounded-3 rounded-pill">Order History</h4>
                </div>
                <div class="border border-danger p-4">
                    <table class="table table-hover table-responsive text-center border caption-top mt-3"style="height: 450px;">
                        <h5 class="mt-3">Pending Order</h5>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product Name</th>
                                <th>Qty</th>
                                <th>Total Amount</th>
                                <th>Address</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php $i = 0;?>
                        <tbody>

                            @foreach ($order as $o)
                                @if($o->o_status == 'pending')
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$o->product_title}}</td>
                                        <td>{{$o->o_qty}}</td>
                                        <td>{{$o->total_amount}}</td>
                                        <th>{{ $o->address }}</th>
                                        <td>{{$o->o_status}}</td>

                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <hr>

                <div class="border border-success p-4 mt-4">
                    <table class="table table-hover table-responsive text-center border caption-top mt-3" style="height: 450px;" >
                        <h5 class="mt-3">Deliverd Order</h5>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product Name</th>
                                <th>Qty</th>
                                <th>Total Amount</th>
                                <th>Address</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php $i = 0;?>
                        <tbody>

                            @foreach ($order as $o)
                                @if($o->o_status == 'deliverd')
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$o->product_title}}</td>
                                        <td>{{$o->o_qty}}</td>
                                        <td>{{$o->total_amount}}</td>
                                        <th>{{ $o->address }}</th>
                                        <td>{{$o->o_status}}</td>
                                    </tr>
                                @endif
                            @endforeach


                        </tbody>
                    </table>
                </div>

                <hr>
            </div>
        </div>

    </div>
@endsection
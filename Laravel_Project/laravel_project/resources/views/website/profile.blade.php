@extends('website.layout.struct')
@section('content')
<div class="container mt-5 ">

    <div class="col-lg-12 d-flex">
        <div class="col-lg-6 border">
            <div class="col-lg-12 p-3">

                <img src="{{url('website/upload/customers/' . $data->image)}}" alt=""
                    style=" border-radius: 8px; height:150px;padding: 5px; box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5); display: block; margin: auto;">
                <div class="mt-3">
                    <a href="{{('/Edit Profile/').$data->id}}" class="btn btn-outline-secondary mx-3">Edit Profile</a>
                    <a href="#" class="btn btn-outline-danger mx-3">Forgot Password</a>
                </div>
            </div>
            <div class="border-top border-2 border-dark p-3">
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
        <div class="col-lg-6 border ">
            <h5 class="border-bottom m-3">Order History</h5>
            <table class="table table-hover text-center border">
                
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Qty</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <?php $i=0;?>
                <tbody>

                   @foreach ($order as $o)
                        <tr>
                           
                              <td class="row">{{++$i}}</td>  
                              <td>{{$o->product_title}}</td>
                              <td>{{$o->o_qty}}</td>
                              <td>{{$o->total_amount}}</td>
                              <td>{{$o->o_status}}</td>
                           
                        </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
@extends('website.layout.struct')
@section('content')
    <div class="container mt-4">
        <div class="row contact-form bg-light rounded p-5">
            <div class="col-md-6 ">
                <img src="{{url('admin/img/Product/' . $data->product_image)}}" class="img-fluid rounded shadow"
                    alt="{{ $data->product_title }}" height="100%" width="70%">
            </div>
            <div class="col-md-6">

                <h1 class="mb-2">{{$data->product_title}}</h1>
                <h3 class="mb-2 border-bottom">{{$data->product_weight}}</h3>
                <h3 class="mb-2"><span>&#8377;</span>{{$data->product_price}}</h3>
                <p class="mt-5">{{$data->product_descp}}</p>
                <hr class="md-3">
                <form action="{{url('/Order')}}" method="post">
                    @csrf
                    <input type="hidden" name="pro_id" id="pro_id" value="{{$data->id}}">
                    <div class="form-group mb-2">
                        <label for="qty" class="form-label">Enter Qty You Want</label>
                        <input type="text" name="qty" id="qty" class="form-control" onchange="handleChange(this.value)">
                        @error('qty')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="address" class="form-label">Deliver Address</label>
                        <textarea name="address" cols="10" rows="5" class="form-control"></textarea>
                        @error('address')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="hidden" name="price" id="price" value="{{$data->product_price}}">
                    <div class="form-group mb-2">
                        <label for="total" class="form-label">Total Amount</label>
                        <input type="text" name="total" id="total" class="form-control">
                    </div>
                    <div class="mt-5">
                        <button class="btn btn-block btn-outline-danger" type="submit" data-toggle="modal"
                            data-target="#exampleModal">Buy
                            Now</button>
                    </div>

                </form>

            </div>

        </div>
    </div>

    <script>
        var price = document.getElementById('price').value;

        var total;


        document.getElementById("qty").addEventListener("input", function () {
            let value = this.value.trim(); // Extra spaces hatane ke liye

            if (value !== "") {

                total = price * value;
                document.getElementById("total").value = "\u20B9" + total;
            } else {
                document.getElementById("output").innerText = "";
            }
        });
    </script>
@endsection
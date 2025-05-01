@extends('website.layout.struct')
@section('content')
<div class="container  mt-4">
    <div class="row p-3">
        <div class="col-lg-12">
            <h3 class="pt-4"><i class="bi bi-cart-check mx-2"></i>Your cart 
                <span class="float-right pb-3">
                    <a href="{{url('/Profile')}}" class="btn btn-primary">GO Back</a>
                </span>
            </h3>
        </div>
    </div>
    @forelse($cartItems as $item)
        <div class="card mb-3 shadow-sm">
            <div class="row g-0 align-items-center">
                <div class="col-md-2">
                    <img src="{{url('admin/img/Product/'.$item->product_image)}}" class="img-fluid rounded-start" alt="{{ $item->product_title }}">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->product_title }}</h5>
                        <p class="card-text text-muted">₹{{ $item->product_price }} x {{ $item->c_qty }}</p>
                        <p class="card-text fw-bold">Total: ₹{{ $item->product_price * $item->c_qty }}</p>
                    </div>
                </div>
                <div class="col-md-3 text-end pe-3">
                   <a href="{{url('/removecart/'.$item->id)}}" class="btn btn-outline-danger btn-sm">Remove</a>
                </div>
            </div>
        </div>
    @empty
        <p class="text-muted">Your cart is empty.</p>
    @endforelse
</div>
@endsection
@extends('website.layout.struct')
@section('content')
<div class="container my-5">
    <div class="row bg-white shadow rounded overflow-hidden p-4">
        <div class="col-md-6 text-center mb-3 mb-md-0">
            <img src="{{ url('admin/img/Product/' . $data->product_image) }}" class="img-fluid rounded" alt="{{ $data->product_title }}">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold mb-2">{{ $data->product_title }}</h2>
            <h5 class="text-muted mb-2">{{ $data->product_weight }}</h5>
            <h4 class="text-danger mb-3">₹{{ $data->product_price }}</h4>
            <p class="text-secondary mb-4">{{ $data->product_descp }}</p>
            <hr>
            <form action="{{ url('/Order') }}" method="POST">
                @csrf
                <input type="hidden" name="pro_id" value="{{ $data->id }}">
                <input type="hidden" name="cart_id" @if (isset($cart))
                
                value="{{ $cart->id }}" @endif>
                <input type="hidden" name="price" id="price" value="{{ $data->product_price }}">

                <div class="mb-3">
                    <label for="qty" class="form-label">Enter Quantity</label>
                    <input type="number" min="1" name="qty" id="qty" @if (isset($cart)) value="{{$cart->c_qty}}" @endif class="form-control" onchange="handleChange(this.value)">
                    @error('qty')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Delivery Address</label>
                    <textarea name="address" rows="4" class="form-control"></textarea>
                    @error('address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="total" class="form-label">Total Amount</label>
                    <input type="text" name="total" id="total" @if (isset($total))value="₹{{$total}}" @endif class="form-control" readonly>
                </div>

                <button type="submit" class="btn btn-danger w-100">Buy Now</button>
            </form>
        </div>
    </div>
</div>

<script>
    const price = parseFloat(document.getElementById('price').value);
    document.getElementById("qty").addEventListener("input", function () {
        const qty = parseInt(this.value.trim());
        if (!isNaN(qty) && qty > 0) {
            const total = price * qty;
            document.getElementById("total").value = "₹" + total;
        } else {
            document.getElementById("total").value = "";
        }
    });
</script>
@endsection

@extends('website.layout.struct')
@section('content')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container-fluid text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Products</h1>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Header End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Best Prices We Offer For Ice Cream Lovers
                    </h1>
                </div>
            </div>
            <div class="row">
                <!---->
                @foreach ($data as $p)
                    <div class="col-lg-3 col-md-6 mb-4 pb-2">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">{{$p->product_weight}}</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                                style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="{{url('admin/img/Product/' . $p->product_image)}}"
                                    style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">{{$p->product_title}}</h5>
                            <h5 class="font-weight-bold mb-4 border-top">&#8377;{{$p->product_price}}</h5>
                            <!--add to cart-->
                           
                            <div id="addqty" class="mt-3">
                                <form action="{{('/addtocart/'.$p->id)}}" method="post" class=" rounded px-5">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="qty">Enter the qty</label>
                                        <input type="number" name="qty" id="qty" class="form-control" min="1">
                                    </div>
                                    <input type="submit" name="submit" value="Addtocart" name="submit" class="btn btn-sm btn-primary">
                                    
                                </form>
                            </div>
                            <!--end of cart-->
                            <h5 class="font-weight-bold m-2">OR</h5>
                            <a href="{{('/Order/' . $p->id)}}" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>

                @endforeach
                <!---->
                <div class="col-12 text-center">
                    <a href="" class="btn btn-primary py-3 px-5">Load More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->
    
@endsection
@extends('website.layout.struct')
@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container-fluid text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Products Categories</h1>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="text-white">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item" style="color:white"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color:white">Products Categories</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->


<!-- Cateogries Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Best Delights We Offer for Sweet Lovers
                </h1>
            </div>
        </div>
        <!--Categories-->
        <div class="row">
            
            

            @foreach ($data as $c )
            <div class="col-lg-3 col-md-6 mb-4 pb-2">
                <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                    <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                        <h4 class="font-weight-bold text-white mb-0"><i class="bi bi-circle-fill"></i></h4>
                    </div>
                    <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                        style="width: 150px; height: 150px;">
                        <img class="rounded-circle w-100 h-100" src="{{url('admin/img/Category/'.$c->categories_image)}}"
                            style="object-fit: cover;">
                    </div>
                    <h5 class="font-weight-bold mb-4">{{$c->categories_title}}</h5>
                    <a href="{{url('/ProductDetail/'.$c->id)}}" class="btn btn-sm btn-secondary">Explore More</a>
                </div>
            </div>           
            @endforeach
        </div>
        <!--End of Categories-->



    </div>
</div>
<!-- Categories End -->

@endsection
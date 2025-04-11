@extends('admin.layout.struct')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 pb-5">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="w-100" src="{{url('admin/img/banner-2.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Admin Dashboard</h4>
                        <h1 class="display-3 text-white mb-md-4" id="intro"></h1>
                        <button class="btn btn-primary" id="logout">Logout</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Carousel End -->


 <!-- About Start -->
 <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Traditional & Delicious Sweets Since 1950
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-3">Crafting Sweet Memories, One Bite at a Time</h5>
                    <p>At Sweetify, we bring you a delightful journey of flavors, blending tradition with a touch of modern
                        luxury. From our premium sweets adorned with gold and silver to the rich, authentic taste of age-old
                        recipes, every bite tells a story of love and craftsmanship. Indulge in sweetness like never before!
                    </p>
                    
                    
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{url('admin/img/about.jpeg')}}"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Features</h4>
                    <p>At Sweetify, we focus on delivering an unmatched experience through our handcrafted sweets. Here are
                        three features that set us apart:</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Premium Quality</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Custom Gift Boxes
                    </h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Convenient Online Ordering
                    </h5>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->





@endsection
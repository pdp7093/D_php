@extends('website.layout.struct')
@section('content')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container-fluid text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Gallery</h1>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
        </nav>
    </div>
</div>
    <!-- Header End -->


    <!-- Portfolio Start -->
    <div class="container-fluid py-5 px-0">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h1 class="section-title position-relative text-center mb-5">Delicious Ice Cream Made From Our Very Own Organic Milk</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-4 pb-2" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Cone</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Vanilla</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Chocolate</li>
                    </ul>
                </div>
            </div>
            <div class="row m-0 portfolio-container">
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{url('website/img/portfolio-1.jpg')}}" alt="">
                        <a class="portfolio-btn" href="{{url('website/img/portfolio-1.jpg')}}" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{url('website/img/portfolio-2.jpg')}}" alt="">
                        <a class="portfolio-btn" href="{{url('website/img/portfolio-2.jpg')}}" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{url('website/img/portfolio-3.jpg')}}" alt="">
                        <a class="portfolio-btn" href="{{url('website/img/portfolio-3.jpg')}}" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{url('website/img/portfolio-4.jpg')}}" alt="">
                        <a class="portfolio-btn" href="{{url('website/img/portfolio-4.jpg')}}" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{url('website/img/portfolio-5.jpg')}}" alt="">
                        <a class="portfolio-btn" href="{{url('website/img/portfolio-5.jpg')}}" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{url('website/img/portfolio-6.jpg')}}" alt="">
                        <a class="portfolio-btn" href="{{url('website/img/portfolio-6.jpg')}}" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->

@endsection
@extends('website.layout.base')
@section('content')

<section class="w-100 px-4 py-5 pt-5 " style="background-color: #9de2ff; border-radius: .5rem .5rem 0 0;">
  <div class="row d-flex justify-content-center " style="margin-top:150px;">
    <div class="col col-md-9 col-lg-7 col-xl-6">
      <div class="card" style="border-radius: 15px;">
        <div class="card-body p-4">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img src={{url('website/upload/customers/'.$data->image)}}
                alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;">
            </div>
            <div class="flex-grow-1 mx-3">
              <h5 class="mb-1">{{ $data->firstname }}   {{ $data->lastname }}</h5>
              <p class="mb-2 pb-1">{{ $data->email }}</p>
              <p class="mb-2 pb-1">{{ $data->mobile }}</p>
             
              <div class="d-flex pt-1">
                <button class="btn btn-lg btn-outline-info mx-3">Edit</button>
                <a class="btn btn-lg btn-outline-warning mx-3" href="{{url('/ForgotPassword/'.$data->email)}}">Forgot Password</a>
                
                <a href={{url('/Logout')}} class="btn btn-lg btn-outline-danger mx-3">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
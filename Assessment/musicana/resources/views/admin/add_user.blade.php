@extends('admin.layout.base')
@section('content')

<section class="bg-light py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10 col-xxl-4">
          <div class="card border border-light-subtle rounded-3 shadow-sm">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="text-center mb-3">
                <a href="#!">
                  
                </a>
              </div>
              <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Enter user details</h2>
              <form action="{{ url('/Register') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row gy-2 overflow-hidden">
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">
                      <label for="firstname" class="form-label">First Name</label>
                      @error('firstname')
                        <p class="help-block text-danger">{{$message}}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
                      <label for="lastname" class="form-label">Last Name</label>
                      @error('lastname')
                        <p class="help-block text-danger">{{$message}}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                      <label for="email" class="form-label">Email</label>
                      @error('email')
                        <p class="help-block text-danger">{{$message}}</p>
                      @enderror
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="mobile" id="mobile" placeholder="1234567890">
                      <label for="mobile" class="form-label">Email</label>
                      @error('mobile')
                        <p class="help-block text-danger">{{$message}}</p>
                      @enderror
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" name="password" id="password" value=""
                        placeholder="Password">
                      <label for="password" class="form-label">Password</label>
                      @error('password')
                        <p class="help-block text-danger">{{$message}}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="file" class="form-control" name="image" id="image" value="" placeholder="Password">
                      <label for="image" class="form-label">Profile Image</label>
                      @error('image')
                        <p class="help-block text-danger">{{$message}}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                  </div>
                  <div class="col-12">
                    <div class="d-grid my-3">
                      <button class="btn btn-outline-primary btn-block rounded-pill btn-lg" type="submit">Regsiter</button>
                    </div>
                  </div>
                  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
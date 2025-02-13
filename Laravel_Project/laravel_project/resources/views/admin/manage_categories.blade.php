@extends('admin.layout.struct')
@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container-fluid text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Categories</h1>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Categories</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->


<!-- Add Categories Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Manage Categories</h1>

            </div>
        </div>
        <div class="row justify-content-center ">

            <div class="col-lg-12">
                <a href="Add_Categories" class="float-right btn btn-info btn-lg rounded-pill m-4 rounded-3">Add
                    Categories</a>
                <div class=" mystyle bg-light rounded p-3 ">
                    <div class="mt-4">
                        <table class="text-center table table-hover ">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>NO.</th>
                                    <th>Categories Name</th>
                                    <th>Categories Image</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($no = 1)
                                @foreach ($data as $c)

                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$c->categories_title}}</td>
                                        <td><img src="{{url('admin/img/Category/' . $c->categories_image)}}"
                                                alt="{{$c->category_image}}" width="60rm"></td>
                                        <td>
                                            <a href="{{url('/Edit_Categories/' . $c->id)}}"
                                                class="btn  btn-outline-primary">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{url('/Manage_Categories/' . $c->id)}}"
                                                class="btn  btn-outline-warning">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Categories End -->
@endsection
@extends('admin.layout.base')
@section('content')
    <section style="margin-top:150px">
        <div class="section__content section__content--p30">
            <div class="container-fluid d-flex justify-content-center">
                <div class="row m-t-30">
                    <div class="col-md-12">
                    <div><a href={{url('/AddAlbum')}}
                    class="btn btn-outline-success m-3 float-right rounded-pill">Add Album</a></div>
                        <!-- DATA TABLE-->
                        <div class="table-responsive">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Cover Image</th>
                                        <th>Release Date</th>

                                        <th colspan="2" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=0;
                                    @endphp
                                    @foreach ($data as $a )
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td><img src="{{url('admin/image/album/'.$a->cover_image)}}" alt="" width="50rm"></td>
                                        <td>{{$a->name}}</td>
                                        <td>{{$a->release_date}}</td>
                                        
                                        <td><a href="{{url('/Edit/'.$a->id)}}" class="btn btn-info rounded-pill ">Edit</a></td>
                                        <td><a href="{{url('/Delete/'.$a->id)}}" class="btn btn-danger rounded-pill">Delete</a></td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('admin.layout.base')
@section('content')
    <section style="margin-top:150px">
        <div class="section__content section__content--p30">
            <div class="container-fluid d-flex justify-content-center">
                <div class="row m-t-30">
                    <div class="col-md-12">
                    <div><a href={{url('/AddMusic')}}
                    class="btn btn-outline-success m-3 float-right rounded-pill">Add Music</a></div>
                        <!-- DATA TABLE-->
                        <div class="table-responsive">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Song</th>
                                        <th>Song Name</th>
                                        <th>Artist</th>
                                        <th>Song Image</th>
                                        <th colspan="2" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($data as $a)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>
                                                <audio controls>
                                                    <source src="{{ asset($a->file_path) }}" type="audio/mpeg">
                                                    
                                                </audio>
                                            </td>
                                            <td>{{$a->song_name}}</td>
                                            <td>{{$a->artist}}</td>
                                            <td><img src="{{url('admin/song_images/'.$a->song_image)}}" alt="Song Image" width="50rm"></td>
                                            <td><a href="{{url('/EditMusic/' . $a->id)}}" class="btn btn-info rounded-pill ">Edit</a>
                                            </td>
                                            <td><a href="{{url('/Delete/' . $a->id)}}"
                                                    class="btn btn-danger rounded-pill">Delete</a></td>
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
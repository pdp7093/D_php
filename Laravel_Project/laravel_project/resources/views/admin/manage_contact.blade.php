@extends('admin.layout.struct')
@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container-fluid text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Contacts</h1>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->


<!-- Add Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Manage Contact</h1>
            </div>
        </div>
        <div class="row justify-content-center overflow-auto">

            <div class="col-lg-12">
                
                <div class="contact-form bg-light rounded p-5 mystyle">
                    <div id="success"></div>
                    <table class="table table-hover table-responsive col mt-5 text-center">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>NO.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=0;?>
                        @foreach ($data as $contact)
                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $contact->name?></td>
                                <td><?php echo $contact->email?></td>
                                <td><?php echo $contact->subject?></td>
                                <td><?php echo $contact->message?></td>
                                <td>
                                    <a href="{{url('Manage_Contact/'.$contact->id)}}" class="btn  btn-outline-warning">Delete</a>
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
<!-- Add Contact End -->
@endsection
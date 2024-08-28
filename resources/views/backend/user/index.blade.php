@extends('backend.body.admin_dashboard')
@section('admin')
@section('title', 'User Management Page')
<div class="pagetitle">
    <h1>User Page</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <!-- Reports -->
                <div class="col-12">
                    <div class="card">

                        <div class="filter">

                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">User Management</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('add.user') }}" class="mt-3 btn btn-primary btn-sm float-end">+ Add User</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image Profile</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user=> $data )
                                        <tr>
                                            <th scope="row">{{ $user+1 }}</th>
                                            <td><img src="{{ (!empty($data->image_profile)) ? url($data->image_profile) : url('upload/admin_user_image/anonymprofile.png') }}"
                                                    style="width:50px; height: 40px;"> </td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>
                                                <a href="{{ route('edit.user',$data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="{{ route('delete.user',$data->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div><!-- End Reports -->

            </div>
        </div><!-- End Left side columns -->

    </div>
</section>

@endsection

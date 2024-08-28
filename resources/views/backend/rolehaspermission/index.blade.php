@extends('backend.body.admin_dashboard')
@section('admin')
@section('title', 'Role Has Permission Management Page')
<div class="pagetitle">
    <h1>Role Has Permission Page</h1>
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
                                    <h5 class="card-title">Role Has Permission Management</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('add.rolepermission') }}" class="mt-3 btn btn-primary btn-sm float-end">+ Add Role</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th >#</th>
                                            <th >Roles Name</th>
                                            <th >Permission Name</th>
                                            <th width="18%">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $key=> $data )
                                        <tr>
                                            <th scope="row">{{ $key+1 }}</th>
                                            <td>{{ $data->name }}</td>
                                            <td>
                                                @foreach($data->permissions as $perm)
                                                    <span class="badge rounded-pill bg-danger"> {{ $perm->name }} </span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('edit.rolepermission',$data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="{{ route('rolepermission.delete',$data->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete</a>
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

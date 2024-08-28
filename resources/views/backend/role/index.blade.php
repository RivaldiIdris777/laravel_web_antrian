@extends('backend.body.admin_dashboard')
@section('admin')
@section('title', 'Role Management Page')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="pagetitle">
    <h1>Role Page</h1>
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
                                    <h5 class="card-title">Role Management</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('roles.create') }}" class="mt-3 btn btn-primary btn-sm float-end">+ Add Role</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Guard Name</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role=> $data )
                                        <tr>
                                            <th scope="row">{{ $role+1 }}</th>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->guard_name }}</td>
                                            <td>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('roles.destroy',$data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('roles.edit',$data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                    <button id="delete" type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
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

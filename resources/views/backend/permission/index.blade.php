@extends('backend.body.admin_dashboard')
@section('admin')
@section('title', 'Permission Management Page')
<div class="pagetitle">
    <h1>Permission Page</h1>
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
                                    <h5 class="card-title">Permission Management</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('add.permission') }}"
                                        class="mt-3 btn btn-primary btn-sm float-end">+ Add Permission</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>
                                                <b>#</b>
                                            </th>
                                            <th>Name</th>
                                            <th>Guard Name</th>
                                            <th>Group Name</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permissions as $permission=> $data )
                                        <tr>
                                            <td scope="row">{{ $permission+1 }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->guard_name }}</td>
                                            <td>{{ $data->group_name }}</td>
                                            <td>
                                                <a href="{{ route('edit.permission',$data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="{{ route('delete.permission',$data->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>
                        </div>

                    </div>
                </div><!-- End Reports -->

            </div>
        </div><!-- End Left side columns -->

    </div>
</section>

@endsection

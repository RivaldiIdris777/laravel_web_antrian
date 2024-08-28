@extends('backend.body.admin_dashboard')
@section('admin')
@section('title', 'Edit user data')
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
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Add Role</h5>
                                </div>
                            </div>
                            <!-- Multi Columns Form -->
                            <form class="row g-3" method="post" action="{{ route('roles.update', $roles->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="col-md-12 position-relative">
                                    <label for="roleinsert" class="form-label">Role Name</label>
                                    <input type="text" name="name" value="{{ $roles->name }}" class="form-control" id="roleinsert" required>
                                    <div class="invalid-tooltip">
                                        Please insert role name
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form><!-- End Multi Columns Form -->
                        </div>

                    </div>
                </div><!-- End Reports -->

            </div>
        </div><!-- End Left side columns -->

    </div>
</section>


@endsection

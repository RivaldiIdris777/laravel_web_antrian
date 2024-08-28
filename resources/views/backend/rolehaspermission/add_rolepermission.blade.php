@extends('backend.body.admin_dashboard')
@section('admin')
@section('title', 'Add Role Has Permission')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="pagetitle">
    <h1>Add Role Has Permission</h1>
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
                                    <h5 class="card-title">Add Role Has Permission</h5>
                                </div>
                            </div>

                            <form id="myForm" method="post" action="{{ route('rolepermission.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="firstname" class="form-label">All Roles </label>
                                            <select name="role_id" class="form-select" id="example-select">
                                                <option selected disabled>Select Roles </option>
                                                @foreach($roles as $role)
                                                <option value="{{ $role->id }}"> {{ $role->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-check mb-2 form-check-primary mt-4">
                                        <input class="form-check-input" type="checkbox" value="" id="customckeck15">
                                        <label class="form-check-label" for="customckeck15">ChecklistAll</label>
                                    </div>

                                    <hr>

                                    @foreach ($permission_groups as $group )
                                    <div class="row">
                                        <div class="col-3">

                                            <div class="form-check mb-2 form-check-primary">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="customckeck1">
                                                <label class="form-check-label"
                                                    for="customckeck1">{{ $group->group_name }}</label>
                                            </div>

                                        </div>

                                        <div class="col-9">
                                            @php
                                            $permissions = App\Models\User::getpermissionByGroupName($group->group_name)
                                            @endphp
                                            @foreach ($permissions as $permission )
                                            <div class="form-check mb-2 form-check-primary">
                                                <input class="form-check-input" type="checkbox" name="permission[]"
                                                    value="{{ $permission->id }}" id="customckeck{{ $permission->id }}">
                                                <label class="form-check-label"
                                                    for="customckeck{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div><!-- End Reports -->

            </div>
        </div><!-- End Left side columns -->

    </div>
</section>

<script type="text/javascript">
    $('#customckeck15').click(function() {
        if ($(this).is(':checked')) {
            $('input[type = checkbox]').prop('checked', true);
        }else {
            $('input[type = checkbox]').prop('checked', false);
        }
    })
</script>

@endsection

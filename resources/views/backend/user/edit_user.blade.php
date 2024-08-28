@extends('backend.body.admin_dashboard')
@section('admin')
@section('title', 'Edit user data')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Edit User</h5>
                                </div>
                            </div>
                            <!-- Multi Columns Form -->
                            <div class="col-md-12 text-center">
                                <div class="mb-3">
                                    <label for="example-fileinput" class="form-label"> </label>
                                    <img id="showImage" src="{{ asset($user->image_profile) }}"
                                        class="rounded-circle avatar-lg img-thumbnail" alt="profile-image"
                                        style="width:100px; height: 100px;">
                                </div>
                            </div> <!-- end col -->
                            <form class="row g-3" method="post" action="{{ route('user.update') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Username</label>
                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="inputName5">
                                    @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Email</label>
                                    <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="inputEmail5">
                                    @error('email')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="inputPassword5" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="inputPassword5">
                                    @error('password')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="inputPassword5" class="form-label">Confirm Password</label>
                                    <input type="password" name="confirm_password" class="form-control" id="inputPassword5">
                                    @error('confirm_password')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Upload
                                        Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="image_profile" type="file" id="image_profile">
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
<script type="text/javascript">
    $(document).ready(function () {
        $('#image_profile').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection

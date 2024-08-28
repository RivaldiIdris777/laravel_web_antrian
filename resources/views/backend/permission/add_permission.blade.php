@extends('backend.body.admin_dashboard')
@section('admin')
@section('title', 'Add Permission data')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Add Permission</h5>
                                </div>
                            </div>
                            <!-- Multi Columns Form -->
                            <form class="row g-3" method="post" action="{{ route('permission.store') }}">
                                @csrf
                                <div class="col-md-6 position-relative">
                                    <label for="permissioninsert" class="form-label">Permission Name</label>
                                    <input type="text" name="name" class="form-control" id="permissioninsert" required>
                                    <div class="invalid-tooltip">
                                        Please insert Permission name
                                    </div>
                                </div>
                                <div class="col-md-6 position-relative">
                                    <label for="validationTooltip04" class="form-label">Group Name</label>
                                    <select class="form-select" name="group_name" id="validationTooltip04" required>
                                      <option selected disabled value="">--Choose Group Name--</option>
                                      <option value="customer">Customer</option>
                                      <option value="product">Product</option>
                                      <option value="user">User</option>
                                      <option value="order">Order</option>
                                    </select>
                                    <div class="invalid-tooltip">
                                      Please select a valid state.
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

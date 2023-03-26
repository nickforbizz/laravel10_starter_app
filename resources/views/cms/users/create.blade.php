@extends('layouts.cms')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title"> Users </h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Users</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Create</a>
            </li>
        </ul>
    </div>
    <div class="row">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Add Record</h4>

                    </div>
                </div>
                <div class="card-body">

                    <!-- form -->
                    <form id="users-create" action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div class="form-group form-floating-label">
                            <input id="names" type="text" class="form-control input-border-bottom" name="name" required="true">
                            <label for="names" class="placeholder">Names</label>
                        </div>

                        <div class="form-group form-floating-label">
                            <input id="email" type="email" class="form-control input-border-bottom" name="email" required="true">
                            <label for="email" class="placeholder">Email</label>
                        </div>

                        <div class="form-group form-floating-label">
                            <input id="password" type="password" class="form-control input-border-bottom" name="password" required="true">
                            <label for="password" class="placeholder">Password</label>
                        </div>

                        <div class="form-group form-floating-label">
                            <input id="confirm_password" type="password" class="form-control input-border-bottom" name="confirm_password" required="true">
                            <label for="password" class="placeholder">Confirm Password</label>
                        </div>
                        <hr>
                        <div class="form-group form-floating-label">
                            <button class="btn btn-primary btn-round ml-auto">Submit</button>
                        </div>
                    </form>
                    <!-- End form -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- .page-inner -->

@endsection


@push('scripts')
<script>
    $(document).ready(function() {

    });
</script>

@endpush
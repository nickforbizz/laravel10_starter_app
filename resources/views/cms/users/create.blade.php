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
                        <a href="{{ route('users.index') }}" class="btn btn-primary btn-round ml-auto" >
                            <i class="flaticon-left-arrow-4 mr-2"></i>
                            View Records
                        </a> 
                    </div>
                </div>
                <div class="card-body">

                    <!-- form -->
                    @include('cms.helpers.partials.feedback')
                    <form id="users-create" action="{{ route('users.store' ) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($user->fname))
                        <input type="hidden" name="_method" value="put" />
                        @endif
                        <input  type="text"  name="record_id" value="{{ $user->id ?? '-99' }}" />
                        <div class="form-group form-floating-label">
                            <input id="fname" type="text" class="form-control input-border-bottom" name="fname" value="{{ $user->fname ?? '' }}" required="true" />
                            <label for="fname" class="placeholder">First Name</label>
                        </div>

                        <div class="form-group form-floating-label">
                            <input id="lname" type="text" class="form-control input-border-bottom" name="lname" value="{{ $user->lname ?? '' }}" required="true" />
                            <label for="lname" class="placeholder">Last Name</label>
                        </div>

                        <div class="form-group form-floating-label">
                            <input id="email" type="email" class="form-control input-border-bottom" name="email" value="{{ $user->email ?? '' }}" required="true" />
                            <label for="email" class="placeholder">Email</label>
                        </div>

                        <div class="form-group form-floating-label">
                            <label for="avator" class="">Avator</label>
                            <input id="avator" type="file" class="form-control input-border-bottom" name="avator" />
                            <img id="blah" src="#" alt="your image" height="50px"/>
                        </div>

                        
                        <div class="form-group form-floating-label">
                            <input id="password" type="password" class="form-control input-border-bottom" name="password" required="true" />
                            <label for="password" class="placeholder"> Password</label>
                        </div>
                        
                        <div class="form-group form-floating-label">
                            <input id="confirm_password" type="password" class="form-control input-border-bottom" name="confirm_password" required="true" />
                            <label for="confirm_password" class="placeholder"> Password</label>
                        </div>




                        
                        <hr>
                        <div class="form-group form-floating-label">
                            <button class="btn btn-success btn-round ml-auto">Submit</button>
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
        $("#avator").change(function() {
			readURL(this);
		});
    });
</script>

@endpush
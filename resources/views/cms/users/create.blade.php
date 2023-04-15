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
                    <form id="users-create" 
                            action="@if(isset($user->id))  
                            {{ route('users.update', ['user' => $user->id]) }}
                            @else {{ route('users.store' ) }} @endif"  
                            method="post" 
                            enctype="multipart/form-data">

                        @csrf
                        @if(isset($user->id))
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        @endif

                        <div class="form-group form-floating-label">
                            <input id="fname" type="text" class="form-control input-border-bottom" name="fname" value="{{ $user->fname ?? '' }}"  />
                            <label for="fname" class="placeholder">First Name</label>
                            @error('fname') <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group form-floating-label">
                            <input id="lname" type="text" class="form-control input-border-bottom" name="lname" value="{{ $user->lname ?? '' }}" required="true" />
                            <label for="lname" class="placeholder">Last Name</label>
                            @error('lname') <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group form-floating-label">
                            @if(isset($user->id)) 
                            <label for="email" class="">Email</label>
                            <input id="email" type="email" class="form-control input-border-bottom @error('email') is-invalid @enderror"  value="{{ $user->email ?? '' }}" readonly disabled />
                            @else
                            <input id="email" type="email" class="form-control input-border-bottom @error('email') is-invalid @enderror" name="email"  value="{{ $user->email ?? '' }}" required />
                            <label for="email" class="placeholder">Email</label>
                            @endif
                            @error('email') <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group form-floating-label">
                            <label for="profile" class=""> Profile</label>
                            <input id="profile" type="file" class="form-control input-border-bottom" name="profile" />
                            <img id="blah" src="#" alt="your image" height="50px"/>
                        </div>

                        
                        <!-- <div class="form-group form-floating-label">
                            <input id="password" type="password" class="form-control input-border-bottom" name="password" required="true" />
                            <label for="password" class="placeholder"> Password</label>
                            @error('password') <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group form-floating-label">
                            <input id="password_confirmation" type="password" class="form-control input-border-bottom" name="password_confirmation" required="true" />
                            <label for="password_confirmation" class="placeholder">Confirm Password</label>
                            @error('password_confirmation') <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> -->


                        <div class="form-group">
                            <label for="role"> Roles </label>
                            <select name="roles[]" id="role" multiple="multiple" class="form-control form-control select2">
                                @forelse($roles as $role)
                                    <option value="{{ $role->name }}" @if(isset($user) && $user->hasRole($role->name)) selected @endif> {{ $role->name }} </option>
                                @empty
                                    <option selected disabled> -- No item -- </option> 
                                @endforelse
                            </select>
                            @error('roles') <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>




                        <div class="card">
                            <div class="form-group form-floating-label">
                                <button class="btn btn-success btn-round float-right">Submit</button>
                            </div>
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
        $("#profile").change(function() {
			readURL(this);
		});

        $('#createallcb').change(function () {
            $('.perm_check').prop('checked', $(this).prop('checked'));
        });
    });


    
</script>

@endpush
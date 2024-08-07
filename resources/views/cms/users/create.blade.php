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
                        <a href="{{ route('users.index') }}" class="btn btn-primary btn-round ml-auto">
                            <i class="flaticon-left-arrow-4 mr-2"></i>
                            View Records
                        </a>
                    </div>
                </div>
                <div class="card-body">

                    <!-- form -->
                    @include('cms.helpers.partials.feedback')
                    <form id="users-create" action="@if(isset($user->id))  
                            {{ route('users.update', ['user' => $user->id]) }}
                            @else {{ route('users.store' ) }} @endif" method="post" enctype="multipart/form-data">

                        @csrf
                        @if(isset($user->id))
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        @endif

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="fname" class="placeholder">First Name</label>
                                    <input id="fname" type="text" class="form-control" name="fname" value="{{ $user->fname ?? '' }}" placeholder="Enter your input" />
                                    @error('fname') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lname" class="placeholder">Last Name</label>
                                    <input id="lname" type="text" class="form-control" name="lname" value="{{ $user->lname ?? '' }}" required="true" placeholder="Enter your input" />
                                    @error('lname') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>





                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="placeholder">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="username" value="{{ $user->email ?? '' }}" required placeholder="Enter your input" />
                                    @error('email') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone" class=""> Phone </label>
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{ $user->phone ?? '' }}" placeholder="Enter your input"/>
                                    @error('phone') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>




                        <!-- <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password" class="placeholder"> Password</label>
                                    <input id="password" type="password" class="form-control" name="password" autocomplete ="new-password" required="true" placeholder="Enter your input" />
                                    @error('password') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password_confirmation" class="placeholder">Confirm Password</label>
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" autocomplete ="new-password" required="true" placeholder="Enter your input" />
                                    @error('password_confirmation') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div> -->





                        <div class="row">
                            <div class="col-sm-6">
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
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                    <label for="profile" class=""> Profile</label>
                                    <input id="profile" type="file" class="form-control" name="profile" />
                                    <img id="blah" src="#" alt="your image" height="50px" />
                                </div>
                            </div>
                        </div>





                        <div class="card">
                            <div class="form-group">
                                <button class="btn btn-success btn-round submit-form-btn float-right">Submit</button>
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

        $('#createallcb').change(function() {
            $('.perm_check').prop('checked', $(this).prop('checked'));
        });
    });
</script>

@endpush
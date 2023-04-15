@extends('layouts.cms')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title"> User</h4>
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
                <a href="#">User</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Show</a>
            </li>
        </ul>
    </div>
    <div class="row">


        <div class="col-md-12 p-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                                    <div class="profile-picture">
                                        <div class="avatar avatar-xl">
                                            <img src="{{ asset('storage/'.auth()->user()->avator) ?? asset('assets/img/default/avator.png') }}" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="user-profile text-center">
                                        <div class="name"> {{ auth()->user()->name }} </div>
                                        <div class="job">Frontend Developer</div>
                                        <div class="email">{{ auth()->user()->email }}</div>
                                        <div class="desc">A man who hates loneliness</div>
                                        <div class="social-media">
                                            <!-- <a class="btn btn-info btn-twitter btn-sm btn-link" href="#">
                                                <span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
                                            </a>
                                            <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#">
                                                <span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span>
                                            </a>
                                            <a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#">
                                                <span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span>
                                            </a>
                                            <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#">
                                                <span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row user-stats text-center">
                                        <div class="col">
                                            <div class="number"> {{ auth()->user()->posts->count() }} </div>
                                            <div class="title">Posts</div>
                                        </div>
                                        <div class="col">
                                            <div class="number">25</div>
                                            <div class="title">Entity 2</div>
                                        </div>
                                        <div class="col">
                                            <div class="number">134</div>
                                            <div class="title">Entity 3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-8">
                            <div class="card">
                            <div class="card-header">
                                <h4> <b>Change Password</b> </h4>
                            </div>
                                <div class="card-body">
                                    <!-- form -->
                                    @include('cms.helpers.partials.feedback')
                                    <form id="users-create" action="@if(isset($user->id))  
                                        {{ route('users.update', ['user' => $user->id]) }}
                                        @endif" 
                                        method="post" 
                                       >
    
                                        @csrf
                                        @if(isset($user->id))
                                        @method('PUT')
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        @endif
    
    
                                        <div class="form-group form-floating-label">
                                            <input id="password" type="password" class="form-control input-border-bottom" name="password" required="true" />
                                            <label for="password" class="placeholder"> Enter New Password</label>
                                            @error('password') <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
    
                                        <div class="form-group form-floating-label">
                                            <input id="password_confirmation" type="password" class="form-control input-border-bottom" name="password_confirmation" required="true" />
                                            <label for="password_confirmation" class="placeholder">Confirm Password</label>
                                            @error('password_confirmation') <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
    
    
                                        <div class="">
                                            <div class="form-group form-floating-label">
                                                <button class="btn btn-success btn-round float-right">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End form -->
                                </div>
                                <!-- .card-body -->
                                <div class="card-footer">
                                    <a class="text-center" href="{{ route('users.edit', $user->id)  }}"> <i class="fa fa-edit"></i> Edit Other Details </a>
                                    <a class="text-center float-right" href="{{ route('users.index')  }}"> <i class="fa fa-eye"></i> View Users </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- row -->


                </div>
                <!-- .card-body -->
            </div>
        </div>
        <!-- .col-md-6 p-2 -->


    </div>
    <!-- .row -->
</div>
<!-- .page-inner -->

@endsection


@push('scripts')


<script>
    $(document).ready(function() {


    });
</script>

@endpush
@extends('layouts.cms')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title"> Permissions </h4>
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
                <a href="#">Permissions</a>
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
                        <h4 class="card-title">Add|Edit Record</h4>
                        <a href="{{ route('permissions.index') }}" class="btn btn-primary btn-round ml-auto" >
                            <i class="flaticon-left-arrow-4 mr-2"></i>
                            View Records
                        </a> 
                    </div>
                </div>
                <div class="card-body">

                    <!-- form -->
                    @include('cms.helpers.partials.feedback')
                    <form id="permissions-create" 
                            action="@if(isset($permission->id)){{ route('permissions.update', ['permission' => $permission->id]) }}
                            @else {{ route('permissions.store' ) }} @endif"  
                            method="post" >

                        @csrf
                        @if(isset($permission->id))
                        @method('PUT')
                        @endif


                        <div class="form-group form-floating-label">
                            @if(isset($permission->id)) 
                            <label for="name" class="">Name</label>
                            <input id="name" type="text" name="name" class="form-control pl-2 input-border-bottom @error('name') is-invalid @enderror"  value="{{ $permission->name ?? '' }}" readonly />
                            @else
                            <input id="name" type="text" class="form-control input-border-bottom @error('name') is-invalid @enderror" name="name"  value="{{ $permission->name ?? '' }}" required />
                            <label for="name" class="placeholder"> Name</label>
                            @endif
                            @error('name') <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="guard_name"> Guard Name</label>
                            <select name="guard_name" id="guard_name" class="form-control form-control">
                                @forelse($guards as $guard)
                                    <option value="{{ $guard->name }}" @if(isset($post->id)) {{  $guard->id == $post->guard_id ? 'selected' : '' }} @endif> {{ $guard->name }} </option>
                                @empty
                                    <option selected disabled> -- No item -- </option> 
                                @endforelse
                            </select>
                            @error('guard_name') <span class="text-danger">{{ $message }}</span>
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
        
    });


    
</script>

@endpush
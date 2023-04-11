@extends('layouts.cms')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title"> Post Categories </h4>
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
                <a href="#">Post Categories</a>
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
                        <a href="{{ route('postCategories.index') }}" class="btn btn-primary btn-round ml-auto" >
                            <i class="flaticon-left-arrow-4 mr-2"></i>
                            View Records
                        </a> 
                    </div>
                </div>
                <div class="card-body">

                    <!-- form -->
                    @include('cms.helpers.partials.feedback')
                    <form id="postCategories-create" 
                            action="@if(isset($postCategory->id))  
                            {{ route('postCategories.update', ['postCategory' => $postCategory->id]) }}
                            @else {{ route('postCategories.store' ) }} @endif"  
                            method="post" 
                            enctype="multipart/form-data">

                        @csrf
                        @if(isset($postCategory->id))
                            @method('PUT')
                            <input type="hidden" name="created_by" value="{{ auth()->id() }}">
                        @endif


                        <div class="form-group form-floating-label">
                            @if(isset($postCategory->id)) 
                            <label for="name" class="">Name</label>
                            <input id="name" type="text" class="form-control input-border-bottom @error('name') is-invalid @enderror"  value="{{ $postCategory->name ?? '' }}" readonly disabled />
                            @else
                            <input id="name" type="text" class="form-control input-border-bottom @error('name') is-invalid @enderror" name="name"  value="{{ $postCategory->name ?? '' }}" required />
                            <label for="name" class="placeholder">name</label>
                            @endif
                            @error('email') <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group form-floating-label">
                            <textarea name="description" id="description" class="form-control input-border-bottom" >{{ $postCategory->description ?? '' }}
                            </textarea>
                            <label for="description" class="placeholder"> Description</label>
                            @error('description') <span class="text-danger">{{ $message }}</span>
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
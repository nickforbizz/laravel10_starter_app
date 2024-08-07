@extends('layouts.cms')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title"> Roles </h4>
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
                <a href="#">Roles</a>
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
                        <a href="{{ route('roles.index') }}" class="btn btn-primary btn-round ml-auto" >
                            <i class="flaticon-left-arrow-4 mr-2"></i>
                            View Records
                        </a> 
                    </div>
                </div>
                <div class="card-body">

                    <!-- form -->
                    @include('cms.helpers.partials.feedback')
                    <form id="roles-create" 
                            action="@if(isset($role->id)){{ route('roles.update', ['role' => $role->id]) }}
                            @else {{ route('roles.store' ) }} @endif"  
                            method="post" >

                        @csrf
                        @if(isset($role->id))
                        @method('PUT')
                        @endif


                        <div class="form-group form-floating-label">
                            @if(isset($role->id)) 
                            <label for="name" class="">Name</label>
                            <input id="name" type="text" name="name" class="form-control pl-2 input-border-bottom @error('name') is-invalid @enderror"  value="{{ $role->name ?? '' }}" readonly />
                            @else
                            <input id="name" type="text" class="form-control input-border-bottom @error('name') is-invalid @enderror" name="name"  value="{{ $role->name ?? '' }}" required />
                            <label for="name" class="placeholder"> Name</label>
                            @endif
                            @error('name') <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group form-floating-label">
                            <input id="guard_name" type="text" class="form-control pl-2 input-border-bottom @error('guard_name') is-invalid @enderror" name="guard_name"  value="{{ $role->guard_name ?? '' }}" required />
                            <label for="guard_name" class="placeholder"> Guard Name</label>
                            @error('guard_name') <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="permission"> Permissions </label>
                            <select name="permissions[]" id="permission" multiple="multiple" class="form-control form-control select2">
                                @forelse($permissions as $permission)
                                    <option value="{{ $permission->name }}" @if(in_array($permission->name, $role_permissions)) selected @endif > {{ $permission->name }} </option>
                                @empty
                                    <option selected disabled> -- No item -- </option> 
                                @endforelse
                            </select>
                            <input type="checkbox" id="select2_checkAll" >Select All<br>

                            
                            @error('permissions') <span class="text-danger">{{ $message }}</span>
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
        $("#select2_checkAll").click(function() {
				if ($("#select2_checkAll").is(':checked')) {
					$("#permission > option").prop("selected", "selected");
					$("#permission").trigger("change");
				} else {
					$("#permission > option").removeAttr("selected");
					$("#permission").val('').trigger("change");
				}
			});
    });


    
</script>

@endpush
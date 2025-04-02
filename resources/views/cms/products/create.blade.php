@extends('layouts.cms')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title"> Products </h4>
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
                <a href="#">Products</a>
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
                        <a href="{{ route('products.index') }}" class="btn btn-primary btn-round ml-auto">
                            <i class="flaticon-left-arrow-4 mr-2"></i>
                            View Records
                        </a>
                    </div>
                </div>


                <div class="card-body">

                    <!-- form -->
                    @include('cms.helpers.partials.feedback')
                    <form id="products-create" action="@if(isset($product->id))  
                            {{ route('products.update', ['product' => $product->id]) }}
                            @else {{ route('products.store' ) }} @endif" method="post" enctype="multipart/form-data">

                        @csrf
                        @if(isset($product->id))
                        @method('PUT')
                        <input type="hidden" name="created_by" value="{{ auth()->id() }}">
                        @endif


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input id="title" type="text" class="form-control" name="title" placeholder="Enter title ..." value="{{ old('title', $product->title ?? '')  }}" />
                                    @error('title') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select name="category_id" id="product_category" class="form-control">
                                        @forelse($product_categories as $category)
                                        <option value="{{ $category->id }}" @if(isset($product->id)) {{ $category->id == $product->category_id ? 'selected' : '' }} @endif> {{ $category->name }} </option>
                                        @empty
                                        <option selected disabled> -- No item -- </option>
                                        @endforelse
                                    </select>
                                    @error('category_id') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input id="price" type="number" class="form-control" name="price" placeholder="Enter price ..." value="{{ old('price', $product->price ?? '')  }}" />
                                    @error('price') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input id="quantity" type="number" class="form-control" name="quantity" placeholder="Enter quantity ..." value="{{ old('quantity', $product->quantity ?? '')  }}" />
                                    @error('quantity') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="color"> Color </label>
                                    <input id="color" type="color" class="form-control" name="color" placeholder="Enter color ..." value="{{ old('color', $product->color ?? '')  }}" />
                                    @error('color') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="size"> Size </label>
                                    <select name="size" id="size" class="form-control">
                                        <option value="s" @if(isset($product->id)) {{ $product->size == 's' ? 'selected' : '' }} @endif> Small </option>
                                        <option value="m" @if(isset($product->id)) {{ $product->size == 'm' ? 'selected' : '' }} @endif> Middle </option>
                                        <option value="l" @if(isset($product->id)) {{ $product->size == 'l' ? 'selected' : '' }} @endif> Large </option>
                                        <option value="xl" @if(isset($product->id)) {{ $product->size == 'xl' ? 'selected' : '' }} @endif> XLarge </option>
                                    </select>
                                    @error('size') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="label">label</label>
                                    <input id="label" type="text" class="form-control" name="label" placeholder="Enter label ..." value="{{ old('label', $product->label ?? '')  }}" />
                                    @error('label') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="status"> status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1"> In Stock </option>
                                        <option value="2"> Cooming soon </option>
                                        <option value="3"> Sold </option>
                                        <option value="4"> Returned </option>
                                        <option value="5"> Discounted </option>
                                    </select>
                                    @error('status') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control tiny_textarea" placeholder="Enter description ...">{{ old('description', $product->description ?? '') }}</textarea>
                                    @error('description') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-floating-label">
                                    <label for="featuredimg" class=""> Photo </label>
                                    <input id="featuredimg" type="file" class="form-control input-border-bottom" name="featuredimg" />
                                    @if (isset($product->photo))
                                    <img id="blah" src="{{ asset('storage/'.$product->photo) }}" alt="current image" height="100px" />
                                    @else
                                    <img id="blah" src="#" alt="no image" height="100px" />
                                    @endif
                                    @error('photo') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                </div>
                <!-- card-body -->




                <div class="card">
                    <div class="form-group form-floating-label">
                        <button class="btn btn-success btn-round Xsubmit-form-btn float-right">Submit</button>
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
        $("#featuredimg").change(function() {
            readURL(this);
        });

        $('#createallcb').change(function() {
            $('.perm_check').prop('checked', $(this).prop('checked'));
        });
    });
</script>

@endpush
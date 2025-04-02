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
                <a href="{{ route('products.index') }}" class="text-primary"> Products</a>
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
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="card-title"> Products Details</div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="activity-feed">
                                <li class="feed-item feed-item-secondary">
                                    <time class="date">Name</time>
                                    <span class="text"> {{ $product->title }} </span>
                                </li>
                                
                                <li class="feed-item feed-item-info">
                                    <time class="date">  Price </time>
                                    <span class="text"> {{ $product->price  }} </span>
                                </li>
                                <li class="feed-item feed-item-danger">
                                    <time class="date"> Quantity </time>
                                    <span class="text"> {{ $product->quantity }} </span>
                                </li>
                                <li class="feed-item feed-item-warning">
                                    <time class="date"> Label </time>
                                    <span class="text"> {{ $product->label }} </span>
                                </li>

                                <li class="feed-item feed-item-warning">
                                    <time class="date"> Status </time>
                                    <span class="text"> {{ $product->status }} </span>
                                </li>
                                
                               
                            </ol>
                        </div>

                        <div class="col-md-6">
                            <ol class="activity-feed">
                                <li class="feed-item feed-item-info">
                                    <time class="date"> Created By </time>
                                    <span class="text"> {{ $product->user->name }} </span>
                                </li>
                                <li class="feed-item feed-item-warning">
                                    <time class="date"> Created At </time>
                                    <span class="text"> {{ $product->created_at }} </span>
                                </li>
                                <li class="feed-item feed-item-danger">
                                    <time class="date"> Color </time>
                                    <span class="text" style="padding: 5px 15px; background-color: {{ $product->color }}"> {{ $product->color }} </span>
                                </li>
                                <li class="feed-item feed-item-success">
                                    <time class="date"> Size </time>
                                    <span class="text"> {{ $product->size }} </span>
                                </li>
                                <li class="feed-item feed-item-primary">
                                    <time class="date"> Category </time>
                                    <span class="text"> {{ $product->product_category->name }} </span>
                                </li>
                            </ol>
                        </div>

                        <div class="col-sm-12">
                            <hr>
                            <ol class="activity-feed">
                                <li class="feed-item feed-item-success">
                                    <time class="date"> Description </time>
                                    <span class="text"> {!! $product->description !!} </span>
                                </li>
                                <li class="feed-item feed-item-info">
                                    <time class="date"> Photo </time>
                                    @if (isset($product->photo))
                                    <img id="blah" src="{{ asset('storage/'.$product->photo) }}" alt="current image" height="100px" />
                                    @endif
                                </li>
                                <li class="feed-item feed-item-danger">
                                    <time class="date"> Is Active </time>
                                    <span class="text"> {{ ($product->active == 1) ? 'Yes' : 'No' }} </span>
                                </li>
                            </ol>
                        </div>
                    </div>

                </div>
                <!-- .card-body -->
            </div>
        </div>


    </div>
</div>
<!-- .page-inner -->

@endsection


@push('scripts')


<script>

</script>

@endpush
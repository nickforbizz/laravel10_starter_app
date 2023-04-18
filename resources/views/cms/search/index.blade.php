@extends('layouts.cms')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title"> Search Results </h4>
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
                <a href="#">Search</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Index</a>
            </li>
        </ul>
    </div>
    <div class="row">


        <div class="col-md-12 p-2">
            <div class="card">
                <div class="card-body">


                    @forelse ($results as $result)
                    <div class="row mb-4">
                        <div class="col-12">
                            <h1 class="text-capitalize">
                                <a href="{{ route('posts.show', $result->id) }}"> {{ $result->title }} </a>
                            </h1>
                        </div>

                        <div class="col-12">
                            <p>{!! $result->content !!}</p>
                        </div>
                    </div>

                    
                    @empty
                    <p class="m-5">No results found</p>
                    @endforelse




                </div>
                <!-- .card-body -->
            </div>
        </div>
        <!-- .col-md-6 p-2 -->





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
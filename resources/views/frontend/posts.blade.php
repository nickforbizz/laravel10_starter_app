@extends('layouts.frontend')

@section('content')

<!-- Intro Start -->
<div class="blog-banner d-flex">
    <div class="overlay"></div>
    <div class="container align-self-center">
        <!-- Row Start -->
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto text-center">
                <h2 class="blog-title h2 mb-3" data-aos="fade-up" data-aos-duration="500">Most Popular App</h2>
                <p data-aos="fade-up" data-aos-duration="1000">Nostrum salutandi necessitatibus cu duo, an lobortis tractatos quo. Tation aliquip ei est. Id per semper accusata interpretaris.</p>
            </div>
        </div>
        <!-- Row End -->
    </div>
</div>
<!-- Intro End -->

<!-- Blog Start -->
<div class="mt-6">
    <div class="container">
        <!-- Row Start -->
        <div class="row">
            <div class="col lg-8 sm-12">
                <!-- Row Start -->
                <div class="row">

                    @forelse($posts as $post)
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <!-- Blog Card Start -->
                        <div class="blog-card sm-shadow p-3" data-aos="fade-up">
                            <!-- Blog Image Start -->
                            <div class="blog-img mb-3">
                                <a href="{{ route('blog',['id'=>$post->id]) }}" class="d-block setImgBack">
                                    <img src="{{ url('storage/' . $post->featured_img) }}" class="img-fluid" alt="{{ $post->title }}">
                                    <!-- Blog Overlay Start -->
                                    <div class="overlay d-flex">
                                        <!-- Blog Icons Start -->
                                        <div class="blog-icons align-self-center mx-auto">
                                            <!-- Search Icon -->
                                            <div class="mb-4 top-animatt-icon text-center">
                                                <i class="ti-search ti-x2"></i>
                                            </div>
                                            <!-- Comments and Views -->
                                            <span class="d-block">
                                                <i class="ti-eye"></i>
                                                <span class="mr-2">12</span>
                                                <i class="ti-comment"></i>
                                                <span>21</span>
                                            </span>
                                        </div>
                                        <!-- Blog Icons End -->
                                    </div>
                                    <!-- Blog Overlay End -->
                                </a>
                            </div>
                            <!-- Blog Image End -->
                            <!-- Blog Header Start -->
                            <div class="mb-3">
                                <!-- Blog Date -->
                                <span class="d-block mb-3"><i class="ti-calendar mr-1"></i> {{ $post->created_at->format('F j, Y') }} </span>
                                <span class="blog-head d-block">
                                    <a href="{{ route('blog',['id'=>$post->id]) }}"> {{ Str::limit($post->title, 45) }}</a>
                                </span>
                            </div>
                            <!-- Blog Header End -->
                            <!-- Blog Description Start -->
                            <p> {!! Str::limit($post->content, 125) !!} </p>
                            <!-- Blog Description End -->
                            <!-- Blog Read More Button -->
                            <a href="{{ route('blog',['id'=>$post->id]) }}" class="btn arrow-btn p-0"><span>Read More</span><i class="ti-arrow-right"></i></a>
                        </div>
                        <!-- Blog Card End -->
                    </div>
                    @empty
                    <p>No Posts</p>
                    @endforelse




                    <div class="col-lg-12 d-flex pt-2 mb-4">
                        <div class="text-center">
                            {{ $posts->links('vendor.pagination.bootstrap-4') }}
                        </div>
                        <hr>
                        
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <div class="col lg-4 sm-12 mt-6 mt-lg-0">
                <div class="sm-shadow bg-white p-3 mb-4">
                    <!-- Form Start -->
                    <form action="#" class="mb-5">
                        <!-- Form Field -->
                        <div class="form-field">
                            <input name="search" id="search" type="text" placeholder="Search" class="form-control fc-line" required>
                            <label for="search" class="input-line"></label>
                            <button class="search-btn"><i class="ti-search"></i></button>
                        </div>
                    </form>
                    <!-- Form End -->
                    <!-- Categories Start -->
                    <div>
                        <span class="h4 mb-3">Categories</span>
                        <!-- Card link start -->
                        <ul class="card-links">
                            @forelse($post_categories as $post_category)
                            <li>
                                <a href="#" class="d-block py-3 px-2"> {{ $post_category->name }} <span class="badge badge-secondary ml-1">{{ $post_category->posts->count()  }}</span></a>
                            </li>
                            @empty
                            <p>No Categories</p>
                            @endforelse
                        </ul>
                        <!-- Card link End -->
                    </div>
                    <!-- Categories End -->
                </div>
                <!-- Lastet Post Start -->
                <div class="sm-shadow bg-white p-3 mb-4" data-aos="fade-up">
                    <span class="h4 mb-3">Featured Posts</span>
                    <!-- Card link start -->
                    <ul class="card-links">

                        @forelse($featured_posts as $featured_post)
                            <li>
                                <!-- Post Link Start -->
                                <a href="#" class="d-block py-3 px-2">
                                    <div class="media">
                                        <img class="align-self-start mr-3 img-64 img-circle" src="{{ url('storage/' . $featured_post->featured_img) }}" alt="Post image">
                                        <div class="media-body">
                                            <h5 class="h5 mt-0 mb-1">{{ Str::limit($featured_post->title, 25) }}</h5>
                                            <div> {!! Str::limit($featured_post->content, 45) !!} </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Post Link End -->
                            </li>
                        @empty
                        <p>No Featured Posts</p>
                        @endforelse

                    </ul>
                    <!-- Card link End -->
                </div>
                <!-- Lastet Post End -->
                <!-- Tags Start -->
                <div class="sm-shadow bg-white p-3 mb-4" data-aos="fade-up">
                    <span class="h4 mb-3">Tags</span>
                    <div class="tag-links">
                        <a href="#">App</a>
                        <a href="#">Mobile</a>
                        <a href="#">Appo</a>
                        <a href="#">Article</a>
                        <a href="#">Download</a>
                        <a href="#">Google</a>
                        <a href="#">News</a>
                    </div>
                </div>
                <!-- Tags End -->
                <!-- Social Start -->
                <div class="sm-shadow social-media bg-white p-3" data-aos="fade-up">
                    <span class="h4 mb-3">Touch with us</span>
                    <!-- Social Icons Start -->
                    <ul class="social mx-auto clearfix">
                        <li class="facebook"><a href="#" class="mx-auto align-self-center ti-facebook"></a></li>
                        <li class="twitter"><a href="#" class="mx-auto align-self-center ti-twitter-alt"></a></li>
                        <li class="linkedin"><a href="#" class="mx-auto align-self-center ti-linkedin"></a></li>
                        <li class="github"><a href="#" class="mx-auto align-self-center ti-github"></a></li>
                    </ul>
                    <!-- Social Icons End -->
                </div>
                <!-- Social End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
</div>
<!-- Blog End -->

@endsection


@push('scripts')

<!-- Scripts -->
<script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/aos.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.cookie.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/blog.pages.js') }}"></script>

@endpush
@extends('layouts.frontend')

@section('content')

<!-- Intro Start -->
<div class="blog-banner d-flex">
    <div class="overlay"></div>
    <div class="container align-self-center">
        <!-- Row Start -->
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto text-center">
                <h2 class="blog-title h2 mb-3" data-aos="fade-up" data-aos-duration="500">Blog Posts</h2>
                <p data-aos="fade-up" data-aos-duration="1000"> Get latest news and updates from our blog page regarding technology.</p>
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
                <!-- Blog Details Start -->
                <div class="blog-details sm-shadow bg-white p-3 mb-4">
                    <!-- Blog Details Image Start -->
                    <div class="blog-details-image mb-4">
                        <img src="{{ url('storage/' . $post->featured_img) }}" alt="Blog main image">
                        <div class="overlay-gradient py-4 px-3">
                            <span class="d-block mb-2">Posted by {{ $post->user->name  }}</span>
                            <div class="clearfix">
                                <span class="d-flex mr-3 float-left"><i class="ti-calendar mr-2"></i> <span class="txt-12 align-self-center"> {{ $post->created_at->format('F j, Y') }} </span></span>
                                <span class="d-flex mr-3 float-left"><i class="ti-eye mr-2"></i> <span class="txt-12 align-self-center">123</span></span>
                                <span class="d-flex float-left"><i class="ti-comments mr-2"></i> <span class="txt-12 align-self-center"> {{ $post->comments->count() }}  </span></span>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Details Image End -->
                    <!-- Blog content Start -->
                    <h4 class="h4 mb-3"> {{ $post->title  }} </h4>
                    <div>
                        {!! $post->content !!}
                    </div>
                    <!-- Blog content End -->
                </div>
                <!-- Blog Details End -->
                <div class="sm-shadow bg-white p-3 mb-4" data-aos="fade-up">
                    <span class="h4 mb-4">Comments</span>
                    <!-- Media Card Start -->

                    @forelse($post->comments as $comment)
                    <div class="media mb-3">
                        <!-- Media Card Img -->
                        <img class="align-self-start mr-3 img-64 img-circle" 
                            src="{{ url('storage/' . $comment->user->avator) }}" 
                            alt="{{ $comment->user->name }}">
                        <!-- Media Card Body Start -->
                        <div class="media-body">
                            <span class="h5 mt-0 mb-1">{{ $comment->created_at->format('F j, Y') }}</span>
                            <p class="mb-2">{{ $comment->comment }}</p>
                            <!-- <a href="#" class="btn btn-rounded p-btn btn-tiny line">Replay</a> -->

                        </div>
                        <!-- Media Card Body End -->
                    </div>
                    <!-- Media Card End -->
                    @empty
                    <p>No Comment</p>
                    @endforelse



                </div>


                <div class="sm-shadow bg-white p-3 mb-5" data-aos="fade-up">
                    <span class="h4 mb-4">Leave a comment</span>
                    @auth
                    <!-- User is authenticated -->
                    <!-- Form Start -->
                    <form action="{{ route('comments.store')  }}" method="POST" class="row" id="comment-frm">
                        @csrf
                        <div class="col-lg-12 mb-4">
                            <!-- Form Field -->
                            <div class="form-field">
                                <textarea name="msg" . id="msg" cols="6" rows="3" name="comment" placeholder="Message" class="form-control fc-line"></textarea>
                                <label for="msg" class="input-line"></label>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="col-lg-12 mb-3">
                            <input type="submit" value="Send" class="btn btn-rounded p-btn line">
                        </div>
                        <!-- Display Message -->
                        <div id="success"></div>
                    </form>
                    <!-- Form End -->
                    @else
                    <!-- User is not authenticated -->
                    <p> <a href="{{ route('login') }}">Login</a>  to leave a comment</p>
                    @endauth
                </div>
            </div>
            <div class="col lg-4 sm-12 mb-5">
                <div class="sm-shadow bg-white p-3 mb-4">
                    <!-- Form Start -->
                    <form action="#" class="mb-5">
                        <!-- Form Field -->
                        <div class="form-field">
                            <input name="search" id="search" type="text" placeholder="Search" class="form-control fc-line" required>
                            <label for="name" class="input-line"></label>
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
                    <span class="h4 mb-3">Latest Posts</span>
                    <!-- Card link start -->
                    <ul class="card-links">
                        @forelse($latest_posts as $latest_post)
                        <li>
                            <!-- Post Link Start -->
                            <a href="#" class="d-block py-3 px-2">
                                <div class="media">
                                    <img class="align-self-start mr-3 img-64 img-circle" src="{{ url('storage/' . $latest_post->featured_img) }}" alt="Post image">
                                    <div class="media-body">
                                        <h5 class="h5 mt-0 mb-1">{{ Str::limit($latest_post->title, 25) }}</h5>
                                        <div> {!! Str::limit($latest_post->content, 45) !!} </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Post Link End -->
                        </li>
                        @empty
                        <p>No Latest Posts</p>
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
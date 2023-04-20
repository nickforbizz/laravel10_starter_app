@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')


@section('img')
<img src="https://th.bing.com/th/id/R.0039451dd1350657f69400330d080150?rik=vQzVeXynj%2bLNEw&pid=ImgRaw&r=0"  alt="You Seem Lost" class="img-lost" height="20vh">
@endsection


@section('message')
 'Sorry, we couldn't find the page you were looking for.'
@endsection

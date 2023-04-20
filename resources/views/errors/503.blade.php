@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')

@section('img')
<img src="https://cdn.dribbble.com/users/5335528/screenshots/14301401/media/a7dbbd802558aa1c270986a16d48dd34.png?compress=1&resize=400x300"  alt="You Should not be here" class="img-lost" height="20vh">
@endsection


@section('message')
 'Sorry, Service Unavailable.'
@endsection

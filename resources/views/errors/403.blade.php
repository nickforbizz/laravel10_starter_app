@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')


@section('img')
<img src="https://cdn.dribbble.com/users/1421621/screenshots/4240634/error-_403_forbidden.jpg"  alt="You Should not be here" class="img-lost" height="20vh">
@endsection


@section('message')
 'Sorry, Forbidden.'
@endsection

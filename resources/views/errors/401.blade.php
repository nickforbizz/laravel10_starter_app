@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')


@section('img')
<img src="https://www.datisnetwork.com/wp-content/uploads/2020/02/error-401.jpg"  alt="You Should not be here" class="img-lost" height="20vh">
@endsection


@section('message')
 'Sorry, Unauthorized access.'
@endsection

@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')


@section('img')
<img src="https://th.bing.com/th/id/R.9be2fd697673c6118553d26f4f7909a5?rik=ro%2bgE35gMJANFA&pid=ImgRaw&r=0"  alt="You Should not be here" class="img-lost" height="20vh">
@endsection


@section('message')
 'Sorry, Server Error.'
@endsection

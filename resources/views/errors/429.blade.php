@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')

@section('img')
<img src="https://th.bing.com/th/id/R.a90652d76d4b44914e6a7d6112e0fe2c?rik=ORoXatPTM78ngQ&pid=ImgRaw&r=0"  alt="You Should not be here" class="img-lost" height="20vh">
@endsection


@section('message')
 'Sorry, Too Many Requests.'
@endsection

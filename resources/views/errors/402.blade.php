@extends('errors::minimal')

@section('title', __('Payment Required'))
@section('code', '402')


@section('img')
<img src="https://ih1.redbubble.net/image.4727351.7884/flat,800x800,075,f.jpg"  alt="You Should not be here" class="img-lost" height="20vh">
@endsection


@section('message')
 'Sorry, Payment Required.'
@endsection

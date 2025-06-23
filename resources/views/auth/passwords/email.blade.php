@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row ">


        <div class="col-6">
            <div class="card mt-4 mb-4" style="max-height:70vh">
                <div class="card-header bg-info p-4"> <h3 class="text-white">{{ __('Reset Password') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6" 
            style="background-image: url('{{ asset('assets/frontend/img/illustrations/illustration-1-dark.png') }}');
                background-size:contain;
                background-repeat: no-repeat;">
            
        </div>
    </div>
</div>
@endsection

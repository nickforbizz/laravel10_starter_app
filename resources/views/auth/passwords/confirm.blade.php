@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        
        <div class="col-6">
            <div class="card mt-4 mb-4" style="max-height:70vh">
                <div class="card-header bg-info p-4"> <h3 class="text-white">{{ __('Confirm Password') }} </h3></div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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

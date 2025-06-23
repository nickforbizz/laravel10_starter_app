@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">

       
        <div class="col-6">
            <div class="card mt-4 mb-4" style="max-height:70vh">
                <div class="card-header bg-info p-4"> <h3 class="text-white">{{ __('Login Screen') }}</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class=" mb-4">
                            
                            <div class="form-group">
                                <label for="email" class="form-label text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                name="email" 
                                value="{{ old('email') }}" 
                                placeholder="Enter your email "
                                required 
                                autocomplete="email" 
                                autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-5">
                            
                            <div class="form-group">
                                <label for="password" class="form-label text-md-end">{{ __('Password') }}</label>
                                <input id="password" 
                                type="password" 
                                class="form-control @error('password') is-invalid @enderror" name="password" 
                                required 
                                placeholder="Enter your password"
                                autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr>
                        <div class="row mb-2">
                            <div class="col-md-6 Xoffset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-8 Xoffset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
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

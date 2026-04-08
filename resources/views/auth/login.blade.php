@extends('layouts.frontend')

@section('content')
<section class="glass-page">
    <div class="container glass-stage">
        <div class="row g-4 align-items-stretch justify-content-center">
            <div class="col-lg-6">
                <x-glass-panel class="glass-auth-panel h-100">
                    <h3 class="glass-auth-title">{{ __('Welcome Back') }}</h3>
                    <p class="glass-auth-subtitle">{{ __('Sign in to continue to your dashboard.') }}</p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="username" class="form-label">{{ __('Username') }}</label>
                            <input
                                id="username"
                                type="text"
                                class="form-control glass-input @error('username') is-invalid @enderror"
                                name="username"
                                value="{{ old('username') }}"
                                placeholder="Enter your username"
                                required
                                autocomplete="username"
                                autofocus
                            >

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input
                                id="password"
                                type="password"
                                class="form-control glass-input @error('password') is-invalid @enderror"
                                name="password"
                                required
                                placeholder="Enter your password"
                                autocomplete="current-password"
                            >

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link p-0" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <button type="submit" class="btn glass-btn w-100">
                            {{ __('Login') }}
                        </button>
                    </form>
                </x-glass-panel>
            </div>

            <div class="col-lg-5">
                <x-glass-panel class="glass-side h-100">
                    <div class="glass-side-content">
                        <h2>{{ __('Smart Lab Booking') }}</h2>
                        <p>{{ __('Reserve rooms and equipment faster with one secure account.') }}</p>
                        <img
                            src="{{ asset('assets/frontend/img/illustrations/illustration-1-dark.png') }}"
                            alt="Login illustration"
                            class="glass-side-image"
                        >
                    </div>
                </x-glass-panel>
            </div>
        </div>
    </div>
</section>
@endsection

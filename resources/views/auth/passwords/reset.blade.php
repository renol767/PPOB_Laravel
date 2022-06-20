@extends('layouts.app')

@section('content')

    <!-- Begin page content -->
    <main class="container-fluid h-100">
        <div class="row h-100 overflow-auto">
            <div class="col-12 text-center mb-auto px-0">
                <header class="header">
                    <div class="row">
                        <div class="col-auto">
                            <a href="forgot-password.html" target="_self" class="btn btn-light btn-44"><i
                                    class="bi bi-arrow-left"></i></a>
                        </div>
                        <div class="col">
                            <div class="logo-small">
                                <img src="{{asset('template')}}/img/logo.png" alt="">
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="" target="_self" class="btn btn-light btn-44 invisible"></a>
                        </div>
                    </div>
                </header>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
                <h1 class="mb-4 text-color-theme">Reset Password</h1>
                <p class="text-muted mb-4">Please create unique password for your account which contains at-least 1
                    capital latter & 1 special character sign</p>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    
                    <div class="form-group form-floating is-valid mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Email Address') }}</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group form-floating is-valid mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <label for="password" class="col-md-4 col-form-label text-md-start">{{ __('Password') }}</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group form-floating is-invalid mb-3">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <label for="password-confirm" class="col-md-8 col-form-label text-md-start">{{ __('Confirm Password') }}</label>
                    </div>
                    <button type="submit" class="btn btn-lg btn-light w-100 shadow">
                        {{ __('Reset Password') }}
                    </button>
                </form>
            </div>
            <div class="col-12 text-center mt-auto">
                <div class="row justify-content-center footer-info">
                    <div class="col-auto">
                        <p class="text-muted">Made with ♡ by PT. NUpay Teknologi Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

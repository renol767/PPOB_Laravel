@extends('layouts.app')   
@section('content')
   <!-- loader section -->
    <!-- <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap loader-cube-animate mx-auto">
                    <img src="{{asset('template')}}/img/logo.png" alt="Logo">
                </div>
                <p class="mt-4">It's time for track budget<br><strong>Please wait...</strong></p>
            </div>
        </div>
    </div> -->
    <!-- loader section ends -->

    <!-- Begin page content -->
    <main class="container-fluid h-100">
        <div class="row h-100 overflow-auto">
            <div class="col-12 text-center mb-auto px-0">
                <header class="header">
                    <div class="row">
                        <div class="col-auto"></div>
                        <div class="col">
                            <div class="logo-small">
                                <img src="{{asset('template')}}/img/logo.png" alt="">
                            </div>
                        </div>
                        <div class="col-auto"></div>
                    </div>
                </header>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
                <h1 class="mb-4 text-color-theme">Sign in</h1>
                <form class="was-validated needs-validation" method="POST" action="{{ route('login') }}" novalidate>
                    @csrf
                    <div class="form-group form-floating mb-3 is-valid">
                        <input id="email" type="email" placeholder="example@mail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label class="form-control-label" for="email">{{ __('Email Address') }}</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group form-floating is-invalid mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <label class="form-control-label" for="password">Password</label>
                        <!-- <button type="button" class="text-danger tooltip-btn" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Enter valid Password" id="passworderror">
                            <i class="bi bi-info-circle"></i>
                        </button> -->
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <p class="mb-3 text-center">
                        @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                        @endif
                    </p>

                    <button type="submit" class="btn btn-lg btn-default w-100 mb-4 shadow"
                        >
                        Sign in
                    </button>
                </form>
                <p class="mb-2 text-muted">Don't have account?</p>
                <a href="{{ route('register') }}" target="_self" class="">
                    Sign up <i class="bi bi-arrow-right"></i>
                </a>

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
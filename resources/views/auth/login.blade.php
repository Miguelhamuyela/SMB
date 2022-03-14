@extends('layouts.merge.dashboardWithoutMenu')
@section('titulo', 'Login')
@section('content')

    <div class="container-scroller bg-white">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper auth p-0 theme-one">
                <div class="row d-flex align-items-stretch">
                    <div class="col-md-5 banner-section d-none d-md-flex align-items-stretch justify-content-center">
                        <div class="slide-content bg-1"> </div>
                    </div>
                    <div class="col-12 col-md-7 ">
                        <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">

                                <a href="{{ route('admin.home') }}">
                                    <img src="/dashboard/images/logo_blue.png" alt="Logo" width="250">
                                </a>
                
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form method="POST" class="mt-5"  action="{{ route('login') }}">
                               @csrf
                                <!-- Email Address -->
                                <div class="form-group">
                                    <label class="label" for="email">Email</label>
                                    <div class="input-group">
                                        <input class="form-control " type="email" name="email" value="{{ old('email') }}"
                                            required autofocus>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="label" for="password">Password</label>
                                    <div class="input-group">
                                        <input id="password" type="password" class="form-control" placeholder="*********"
                                            type="password" name="password" required autocomplete="current-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Remember Me -->
                                <div class="form-group d-flex justify-content-between">
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" id="remember_me" name="remember" class="form-check-input"
                                                checked> {{ __('Remember me') }}</label>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block"> {{ __('Log in') }}</button>
                                </div>



                                <div class="wrapper mt-5 text-gray">
                                    <p class="footer-text">Copyright © 2022 Digital.AO Todos direitos Reservados.</p>
                                  
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>


@endsection



{{-- <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
    <x-slot name="logo">
        <a href="{{ route('admin.home') }}">

            <img src="/dashboard/logotipo/logo.png" alt="Logo" width="150">
        </a>
    </x-slot>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form method="POST" action="{{ route('login') }}">

        <!-- Email Address -->
        <div class="form-group">
            <label class="label" for="email">Email</label>
            <div class="input-group">
                <input class="form-control" type="email" name="email" value="{{ old('email') }}"
                    required autofocus>
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="label" for="password">Password</label>
            <div class="input-group">
                <input id="password" type="password" class="form-control" placeholder="*********"
                    type="password" name="password" required autocomplete="current-password">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                    </span>
                </div>
            </div>
        </div>

        <!-- Remember Me -->
        <div class="form-group d-flex justify-content-between">
            <div class="form-check form-check-flat mt-0">
                <label class="form-check-label">
                    <input type="checkbox" id="remember_me" name="remember" class="form-check-input"
                        checked> {{ __('Remember me') }}</label>
            </div>

        </div>
        <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block"> {{ __('Log in') }}</button>
        </div>


        <div class="wrapper mt-5 text-gray">
            <p class="footer-text">Copyright © 2022 Digital.AO. Todos Direitos Reservados.</p>
            <ul class="auth-footer text-gray">
            </ul>
        </div>
    </form>
</div> --}}

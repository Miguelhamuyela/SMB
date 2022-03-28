@extends('layouts.merge.dashboardWithoutMenu')
@section('titulo', 'Esqueceu a sua Senha?')
@section('content')

    <div class="container-scroller bg-white">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper auth p-0 theme-one">
                <div class="row d-flex align-items-stretch">
                    <div class="col-md-7 banner-section d-none d-md-flex align-items-stretch justify-content-center">
                        <div class="slide-content bg-1"> </div>
                    </div>
                    <div class="col-12 col-md-5 ">
                        <div class="auto-form-wrapper align-items-center justify-content-center flex-column">

                            <a class="align-items-center justify-content-center flex-column d-flex"
                                href="{{ route('admin.home') }}">
                                <img src="/dashboard/images/digital.canvas.png" alt="Logo" width="70">
                            </a>

                            <!-- Session Status -->
                            <x-auth-session-status class="my-4 alert alert-success" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="my-4 alert alert-danger" :errors="$errors" />
                            
                            <div class="my-4 text-sm text-gray-600">
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </div>

                            <form method="POST" class="mt-5" action="{{ route('password.email') }}">
                                @csrf
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
                                    <button class="btn btn-primary submit-btn btn-block">
                                        {{ __('Email Password Reset Link') }}</button>
                                </div>

                                <div class="text-center mt-2 text-gray">
                                    <small class="text-muted">Todos os Direitos Reservados ao
                                        <a href="https://www.infosi.gov.ao" target="_blank">
                                            INFOSI
                                        </a>
                                        ©
                                        {{ date('Y') }}
                                    </small>
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

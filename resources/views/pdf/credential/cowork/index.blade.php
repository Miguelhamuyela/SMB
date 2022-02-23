@extends('layouts.merge.dashboardWithoutMenu')
@section('titulo', 'Credenciamento dos Membros do Cowork')

@section('content')

    <div class="card col-lg-8 shadow shadow-lg mx-auto">
        <div class="row">


            <div class="col-md-8">
                <div class="card-body">
                    <div class="container-fluid">

                        <img src="/dashboard/images/logo_blue.png">
                        <h4 class="text-left mt-5 mb-2"><b> Credenciamento </b><br>{{ $member->name }}</h4>
                        <hr>
                    </div>

                    <div class="col-lg-12">
                        <p>
                            <b>OCUPAÇÃO: </b> {{ $member->occupation }} <br>
                            <b>EMAIL: </b>{{ $member->email }} <br>
                            <b>TELEFONE: </b>{{ $member->tel }} <br>
                            <b>NIF: </b>{{ $member->nif }}
                        </p>
                    </div>
                    <hr>

                    <div class="col-lg-12 ">

                        <p>
                            <b>COWORK</b><br>
                            <b>ACTIVIDADES REALIZADAS: </b>{{ $member->cowork->activities }} <br>
                            <b>ÁREA DE ACTUAÇÃO DA EMPRESA: </b>{{ $member->cowork->title }}
                        </p>
                    </div>

                    <div class="col-md-12">
                        <div class="col-lg-6 pl-0">
                            <p class="mb-0 mt-5">Data de Cadastro: {{ $member->created_at }}</p>
                            <p>Última Actualização: {{ $member->updated_at }}</p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <a href="https://www.instagram.com/digital.ao2022/" target="_blank" class="col-2">
                                <img src="/dashboard/images/social_icons/instagram.svg" alt="instagram">
                            </a>
                            <a href="https://www.facebook.com/TEC.DIGITAL.AO" target="_blank" class="col-2">
                                <img src="/dashboard/images/social_icons/facebook.svg" alt="facebook">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 text-center d-none d-lg-block">
                <img src="/dashboard/images/banner.jpg" alt="">
            </div>
        </div>

    </div>

@endsection

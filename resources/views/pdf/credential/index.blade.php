@extends('layouts.merge.dashboardWithoutMenu')
@section('titulo', 'Credenciamento dos Membros das Startup')

@section('content')

    <div class="card col-lg-8 shadow shadow-lg mx-auto">

        <div class="card-body">
            <div class="container-fluid">

                <img src="/dashboard/images/logo_blue.png">
                <h4 class="text-left mt-5 mb-2"><b> Credenciamento </b><br>{{ $member->name }}</h4>
                <hr>
            </div>

            <div class="container-fluid d-flex justify-content-between">
                <div class="col-lg-3 pl-0">
                    <H5 class="mt-5 mb-2">
                        <b> {{ $member->name }}</b>
                    </H5>
                    <p>
                        <b>OCUPAÇÃO: </b> {{ $member->occupation }}, <br>
                        <b>EMAIL: </b>{{ $member->email }}, <br>
                        <b>TELEFONE: </b>{{ $member->tel }}, <br>
                        <b>NIF: </b>{{ $member->nif }}
                    </p>
                </div>


                <div class="col-lg-3 pr-0">
                    <H5 class="mt-5 mb-2 text-right">
                        <b> {{ $member->startup->name }}</b>
                    </H5>
                    <p class="text-right">

                        <b>MODELO DE ENCUBADORA: </b>{{ $member->startup->incubatorModel }}, <br>
                        <b>NIF: </b>{{ $member->startup->nif }}
                    </p>
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-between">
                <div class="col-lg-6 pl-0">
                    <p class="mb-0 mt-5">Data de Cadastro : {{ $member->created_at }}</p>
                    <p>Última Actualização : {{ $member->updated_at }}</p>
                </div>
            </div>

        </div>

    </div>

@endsection

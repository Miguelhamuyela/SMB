@extends('layouts.merge.dashboard')
@section('titulo', 'Credenciamento dos Membros das Startup')

@section('content')
    <div class="row">

        <div class="card col-lg-12">
            <div class="card-body">
                <h5>
                    <b><a href="{{ url('admin/startup/show/' . $member->startup->id) }}">Detalhes da Startup </a>
                        > Membro da Startup -
                        {{ $member->startup->name }}
                    </b>
                </h5>
            </div>
        </div>


        <div class="card col-lg-12">
            <div class="px-2">
                <div class="card-body">
                    <div class="container-fluid">
                        <h4 class="text-center my-3"><b> Credenciamento </b><br>{{ $member->name }}</h4>
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

                                <b>MODELO DE INCUBAÇÃO: </b>{{ $member->startup->incubatorModel }}, <br>
                                <b>NIF: </b>{{ $member->startup->nif }}
                            </p>
                        </div>
                    </div>
                    <div class="container-fluid d-flex justify-content-between">
                        <div class="col-lg-3 pl-0">
                            <p class="mb-0 mt-5">Data de Cadastro : {{ $member->created_at }}</p>
                            <p>Última Actualização : {{ $member->updated_at }}</p>
                        </div>
                    </div>
                    <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                        {!! QrCode::size(150)->generate(url('membro/startup/' . $member->nif)) !!}
                    </div>

                    <div class="container-fluid w-100">
                        <a href="{{ url('admin/member/print/' . $member->nif) }}" target="_blank" class="btn btn-primary float-end mt-4 ms-2">
                            <i class="mdi mdi-printer me-4"></i>IMPRIMIR</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

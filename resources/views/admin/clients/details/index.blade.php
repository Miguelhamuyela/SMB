@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Cliente')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Detalhes do Cliente {{ $clients->name }}
            </h2>
        </div>
    </div>

    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="row  align-items-center">


                            <div class="col-12 mt-2">
                                <h5 class=""><b>Informações do Cliente </b> </h5>
                                <hr>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Nome do Cliente</b><br>
                                            <small> {{ $clients->name }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Número de Identificação Fiscal</b><br>
                                            <small> {{ $clients->nif }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Email</b><br>
                                            <small> {{ $clients->email }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Telefone</b><br>
                                            <small> {{ $clients->tel }}</small>
                                        </p>
                                    </div>

                                </div>
                            </div>

                
                            <div class="col-12 my-5">
                                <hr>
                                <div class="row">


                                    <div class="col-md-8">
                                        <small class="mb-1 text-dark">
                                            <b>Data de Cadastro:</b>
                                            {{ $clients->created_at }}
                                        </small><br>
                                        <small class="mb-1 text-dark">
                                            <b>Última Actualização:</b>
                                            {{ $clients->updated_at }}
                                        </small>
                                    </div>
                                    <div class="col-md-4 text-dark text-right">
                                        <a href='{{ url("admin/client/edit/{$clients->id}") }}'>
                                            <i class="fa fa-edit"></i>
                                            Editar
                                        </a>
                                        <br>

                                        <a href='{{ url("admin/client/delete/{$clients->id}") }}'
                                            class="text-danger">
                                            <i class="fa fa-trash"></i>
                                            Eliminar
                                        </a>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div> <!-- /.col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->


@endsection

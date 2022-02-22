@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes de Funcionários')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/funcionários/list') }}">Listar Funcionários</a>
                    > Detalhes de Funcionários - {{ $Employee->name }}

                </b></h2>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="row  align-items-center">


                            <div class="col-12 mt-2">
                                <h5 class=""><b>Informações do Funcionário </b> </h5>
                                <hr>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Nome do Funcionário </b><br>
                                            <small> {{ $Employee->name }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Número de Identificação Fiscal</b><br>
                                            <small> {{ $Employee->nif }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Email</b><br>
                                            <small> {{ $Employee->email }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Telefone</b><br>
                                            <small> {{ $Employee->tel }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Ocupação </b><br>
                                            <small> {{ $Employee->occupation }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Departamento</b><br>
                                            <small>{{ $Employee->departament }} </small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Foto </b><br>
                                            <small>
                                                @if (isset($Employee->photoEmployee))
                                                    <img src="/storage/{{ $Employee->photoEmployee }}"
                                                        class="mr-2 rounded-circle" alt="Cinque Terre" width="90"
                                                        height="90">
                                            </small>
                                        @else
                                            <img src="/dashboard/User-595b40b85ba036ed117da56f.svg"
                                                class="mr-2 rounded-circle" alt="Cinque Terre" width="90" height="90">
                                            @endif

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
                                            {{ $Employee->created_at }}
                                        </small><br>
                                        <small class="mb-1 text-dark">
                                            <b>Última Actualização:</b>
                                            {{ $Employee->updated_at }}
                                        </small>
                                    </div>
                                    <div class="col-md-4 text-dark text-right">
                                        <a href='{{ url("admin/funcionários/edit/{$Employee->id}") }}'>
                                            <i class="fa fa-edit"></i>
                                            Editar
                                        </a>
                                        <br>

                                        <a onclick="mens()" href='{{ url("admin/funcionários/delete/{$Employee->id}") }}'
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

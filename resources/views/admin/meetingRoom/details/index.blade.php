@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes de Salas de Reuniões')

@section('content')

    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/sala-de-reunião/list') }}">Listar Salas de Reuniões</a>
                    > Detalhes de Salas de Reunião - {{ $meetingRoom->title }}


                </b></h2>
        </div>
    </div>

    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="row  align-items-center">


                            <div class="col-12 mt-2">
                                <h5 class=""><b>Detalhes da Reunião </b> </h5>
                                <hr>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Título da Reunião</b><br>
                                            <small> {{ $meetingRoom->title }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Nome do Solicitante</b><br>
                                            <small> {{ $meetingRoom->name }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Email </b><br>
                                            <small> {{ $meetingRoom->email }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Telefone</b><br>
                                            <small> {{ $meetingRoom->phone }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Sala</b><br>
                                            <small> {{ $meetingRoom->meetRoom }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Descrição</b><br>
                                            <small> {{ $meetingRoom->description }}</small>
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <h5 class=""><b>Período de Agendamento</b> </h5>
                                <hr>
                            </div>

                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Data de Entrada</b><br>
                                            <small> {{ $meetingRoom->scheldules->started }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Data de Saída</b><br>
                                            <small> {{ $meetingRoom->scheldules->end }}</small>
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
                                            {{ $meetingRoom->created_at }}
                                        </small><br>
                                        <small class="mb-1 text-dark">
                                            <b>Última Actualização:</b>
                                            {{ $meetingRoom->updated_at }}
                                        </small>
                                    </div>



                                    <div class="col-md-4 text-dark text-right">
                                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                                            href='{{ url("admin/sala-de-reunião/edit/{$meetingRoom->id}") }}'>
                                            <i class="fa fa-edit"></i>
                                            Editar
                                        </a>
                                        <br>


                                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                                            value="{{ $meetingRoom->id }}">
                                            <i class="fa fa-trash"></i>
                                            Eliminar
                                        </button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>




            </div> <!-- /.col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

    @include('admin.extras.modal.delete.meetingRoom.index')
@endsection

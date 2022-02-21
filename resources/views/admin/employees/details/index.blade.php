@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Employee')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">

                Detalhes do Employee {{ $Employee->title }}
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
                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Nome do Cliente</b><br>
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
                                            <b>Tipo de cliente</b><br>
                                            <small> {{ $Employee->clienttype}}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Endereço</b><br>
                                            <small> }</small>
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
                                        <a href='{{ url("admin/Employee/edit/{$Employee->id}") }}'>
                                            <i class="fa fa-edit"></i>
                                            Editar
                                        </a>
                                        <br>

                                        <a onclick="mens()" href='{{ url("admin/Employee/delete/{$Employee->id}") }}'
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

    <div class="card mb-2">
        <div class="card-body">
            <div class="row align-items-center my-4">
                <div class="col">
                    <h2 class="page-title h4">Membros</h2>
                </div>
                <div class="col-auto">
                    <a type="button" class="btn btn-lg btn-primary text-white"
                        href="{{ url("admin/memberEmployee/create/{$Employee->id}") }}">
                        <span class="fa fa-plus fa-16 mr-3"></span>Novo Membro
                    </a>
                </div>
            </div>


            <div class="page-category pb-5">
                    <table class="table table-hover" id="dataTable-1">
                      <thead class="bg-primary thead-dark">
                            <tr class="text-center">

                                <th>NOME DO MEMBRO</th>
                                <th>EMAIL</th>
                                <th>TELEFONE</th>
                                <th>NIF</th>
                                <th>OCUPAÇÁO</th>
                                <th class="text-left">ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($Employee->members as $item)
                                <tr class="text-center text-dark">
                                    <td class="text-left">{{ $item->name }}</td>
                                    <td class="text-left">{{ $item->email }}</td>
                                    <td class="text-left">{{ $item->tel }}</td>
                                    <td class="text-left">{{ $item->nif }}</td>
                                    <td class="text-left">{{ $item->occupation}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary text-white dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-navicon fa-sm" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href='{{ url("admin/memberEmployee/delete/$item->id") }}'
                                                    class="dropdown-item">Eliminar</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

            </div>

    </div>
@endsection

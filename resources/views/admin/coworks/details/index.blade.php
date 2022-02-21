@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Cowork')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">

                Detalhes do Cowork {{ $cowork->title }}
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
                                            <small> {{ $cowork->clients->name }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Número de Identificação Fiscal</b><br>
                                            <small> {{ $cowork->clients->nif }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Email</b><br>
                                            <small> {{ $cowork->clients->email }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Telefone</b><br>
                                            <small> {{ $cowork->clients->tel }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Tipo de cliente</b><br>
                                            <small> {{ $cowork->clients->clienttype}}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Endereço</b><br>
                                            <small> {{ $cowork->clients->address }}</small>
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <h5 class=""><b>Coworks </b> </h5>
                                <hr>
                            </div>

                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b> Área de Actuação da Empresa</b><br>
                                            <small> {{ $cowork->title }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Actividades Realizadas</b><br>
                                            <small> {{ $cowork->activities }}</small>
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <h5 class=""><b>Período do Contrato</b> </h5>
                                <hr>
                            </div>

                            <div class="col-12 mb-5">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Inicio do Contracto</b><br>
                                            <small> {{ $cowork->scheldules->started }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Fim do Contracto</b><br>
                                            <small> {{ $cowork->scheldules->end }}</small>
                                        </p>
                                    </div>



                                </div>
                            </div>


                            <div class="col-12 mt-2">
                                <h5 class=""><b>Informações de Pagamento </b> </h5>
                                <hr>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Tipo de Pagamento</b><br>
                                            <small> {{ $cowork->payments->type }}</small>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Valores a Pagar</b><br>
                                            <small> {{ $cowork->payments->value }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Referencia</b><br>
                                            <small> {{ $cowork->payments->reference }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Moeda</b><br>
                                            <small> {{ $cowork->payments->currency }}</small>
                                        </p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-dark">
                                            <b>Status</b><br>
                                            <small> {{ $cowork->payments->status }}</small>
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
                                            {{ $cowork->created_at }}
                                        </small><br>
                                        <small class="mb-1 text-dark">
                                            <b>Última Actualização:</b>
                                            {{ $cowork->updated_at }}
                                        </small>
                                    </div>
                                    <div class="col-md-4 text-dark text-right">
                                        <a href='{{ url("admin/cowork/edit/{$cowork->id}") }}'>
                                            <i class="fa fa-edit"></i>
                                            Editar
                                        </a>
                                        <br>

                                        <a onclick="mens()" href='{{ url("admin/cowork/delete/{$cowork->id}") }}'
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
                        href="{{ url("admin/memberCowork/create/{$cowork->id}") }}">
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
                            @foreach ($cowork->members as $item)
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
                                                <a href='{{ url("admin/memberCowork/delete/$item->id") }}'
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

@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Clientes')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><b>Lista de Clientes</b></h4>


                  <table id="dataTable-1" class="table table-striped table-bordered mb-3">
                      <thead class="bg-primary thead-dark">
                            <tr class="text-center">
                                <th>#</th>
                                <th>NOME DO CLIENTE</th>
                                <th>NIF</th>
                                <th>TELEFONE</th>
                                <th class="text-left">ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($client as $item)
                                <tr class="text-center text-dark">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }} </td>
                                    <td>{{ $item->nif }} </td>
                                    <td>{{ $item->tel }} </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary text-white btn-sm dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-navicon text-white" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href='{{ url("admin/client/show/{$item->id}") }}'
                                                    class="dropdown-item">Detalhes</a>
                                               
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>




                  
                </div>
            </div>
        </div>

    </div>


@endsection

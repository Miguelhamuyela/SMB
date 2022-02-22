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
                                        <a href='{{ url("admin/client/show/{$item->id}") }}' type="button"
                                            class="btn btn-icons btn-rounded btn-primary">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
                                       
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

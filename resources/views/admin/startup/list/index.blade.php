@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Startups')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><b>Lista de Startups</b></h4>


                    <table class="table table-striped my-5" id="dataTable-1">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>NOME DA STARTUP</th>
                                <th>NIF</th>
                                <th>TELEFONE</th>
                                <th class="text-left">ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($startup as $item)
                                <tr class="text-center text-dark">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }} </td>
                                    <td>{{ $item->nif }} </td>
                                    <td>{{ $item->tel }} </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-dark text-white btn-sm dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-navicon text-white" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href='{{ url("admin/startup/show/{$item->id}") }}'
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

@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Funcionarios')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Funcionários</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.employees.create') }}" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <table class="table table-striped my-5" id="dataTable-1">
                         <thead class="bg-primary thead-dark">
                            <tr class="text-center ">
                                <th>#</th>
                                <th>NOME</th>
                                <th>EMAIL</th>

                                <th>NIF</th>
                                <th>TELEFONE</th>
                                <th class="text-left">ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $item)
                                <tr class="text-center text-dark">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }} </td>
                                    <td>{{ $item->email }} </td>

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

                                                <a href='{{ url("admin/funcionários/edit/{$item->id}") }}'
                                                    class="dropdown-item">Editar</a>
                                                <a onclick="mens()"
                                                    href='{{ url("admin/funcionários/delete/{$item->id}") }}'
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
        </div>

    </div>


@endsection

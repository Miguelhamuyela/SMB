@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Candidato ')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Inscritos </b></h5>
                        <div class="row align-items-center">
                            <div class="col">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Imprimir a Lista (Ano Lectivo)
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{ route('admin.students.print') }}"
                                            method="post">
                                            @csrf

                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Coloque aqui o
                                                        Ano Lectivo
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-lg-10 col-md-4">
                                                        <div class="form-group">
                                                            <input required type="text" name="startYear"
                                                                class="form-control"
                                                                placeholder="Pesquisar por Ano Lectivo ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Fechar</button>
                                                    <button type="submit" class="btn btn-primary">
                                                        Imprimir a Lista dos Candidato (Ano Lectivo)</button>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.students.create.index') }}" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="dataTable-1" class="table table-striped table-bordered mb-3">
                            <thead class="bg-primary thead-dark">
                                <tr class="text-center ">
                                    <th>ID</th>
                                    <th>NOME </th>
                                    <th>DATA DE <br>NASCIMENTO</th>
                                    <th>TELEFONE</th>
                                    <th>CURSO</th>
                                    <th>EMAIL</th>
                                    <th>ACÇÃO</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->borthday }}</td>
                                        <td>{{ $item->tel }}</td>
                                        <td>{{ $item->courses->courseName}}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <a href='{{ url("admin/estudantes/show/{$item->id}") }}' type="button"
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
    </div>
@endsection

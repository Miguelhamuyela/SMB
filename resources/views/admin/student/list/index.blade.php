@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Provincia ')
@section('content')
    <div class="row">
        <div class="col-lg-12">



















            <div class="row align-items-center">
                <div class="col">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal">
                        Imprimir a Lista dos Candidato (Ano Lectivo)
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
                <div class="col-auto text-end float-end ms-auto download-grp">
                    <a href="{{ route('admin.students.create.index') }}"
                        class="btn btn-outline-primary me-2"><i class=""></i> Fazer
                        Nova Candidatura</a>
                    <a href="{{ route('admin.students.create.index') }}"
                        class="btn btn-primary"><i class="fas fa-plus"></i></a>
                </div>
            </div>



















            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Rack </b></h5>
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
                                    <th>NOME DA PROVINCIA</th>
                                    <th>DESCRIÇÃO</th>
                                    <th>DESCRIÇÃO</th>
                                    <th>DESCRIÇÃO</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->father }}</td>
                                        <td>{{ $item->startYear }}</td>
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

@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Curso')

@section('content')


    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/curso/list') }}">Listar Curso</a>
                    > Detalhes do Curso - {{ $courses->courseName }}

                </b></h2>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="col-12 mt-2">
                <h5 class=""><b>Informações do Curso </b> </h5>
                <hr>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nome do Curso </b><br>
                            <small> {{ $courses->courseName }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Inicio do Curso</b><br>
                            <small> {{ $courses->start}}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Duração do Curso</b><br>
                            <small> {{ $courses->duration	 }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Departamento ou Secção</b><br>
                            <small> {{ $courses->depart }}</small>
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
                            {{ $courses->created_at }}
                        </small><br>
                        <small class="mb-1 text-dark">
                            <b>Última Actualização:</b>
                            {{ $courses->updated_at }}
                        </small>
                    </div>
                    <div class="col-md-4 text-dark text-right">
                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                            href='{{ url("admin/curso/edit/{$courses->id}") }}'>
                            <i class="fa fa-edit"></i>
                            Editar
                        </a>
                        <br>

                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                            value="{{ $courses->id }}">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </button>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('admin.extras.modal.delete.courses.index')
@endsection

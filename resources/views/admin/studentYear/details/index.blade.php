@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da Matricula')

@section('content')

    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/ano_estudante/list') }}">Listar Matricula</a>
                    > Detalhes da Matricula - {{ $student_years->students->name }}

                </b></h2>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">
            <div class="col-12 mt-2">
                <h5 class=""><b>Informações da Matricula </b> </h5>
                <hr>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nome </b><br>
                            <small> {{ $student_years->students->name  }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Curso</b><br>
                            <small> {{ $student_years->courses->courseName }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Telefone</b><br>
                            <small> {{ $student_years->students->tel }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Período</b><br>
                            <small> {{ $student_years->period }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nível Académico</b><br>
                            <small> {{ $student_years->level }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Tipo de Estudante</b><br>
                            <small> {{ $student_years->typeStudent }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Ano Lectivo</b><br>
                            <small> {{ $student_years->startYear }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Início do Ano Lectivo</b><br>
                            <small> {{ $student_years->start }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Endereço</b><br>
                            <small> {{ $student_years->students->address }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Endereço Actual</b><br>
                            <small> {{ $student_years->address }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Responsavel(Encarregado de Educação)</b><br>
                            <small> {{ $student_years->students->inCharge }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Genero</b><br>
                            <small> {{ $student_years->students->genro }}</small>
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
                            {{ $student_years->created_at }}
                        </small><br>
                        <small class="mb-1 text-dark">
                            <b>Última Actualização:</b>
                            {{ $student_years->updated_at }}
                        </small>
                    </div>
                    <div class="col-md-4 text-dark text-right">
                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                            href='{{ url("admin/ano_estudante/edit/{$student_years->id}") }}'>
                            <i class="fa fa-edit"></i>
                            Editar
                        </a>
                        <br>

                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                            value="{{ $student_years->id }}">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </button>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('admin.extras.modal.delete.student_years.index')
@endsection

@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Professor')

@section('content')

    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/professor/list') }}">Listar </a>
                    > Detalhes do Professor-> {{ $teachers->name }}
                </b></h2>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">
            <div class="col-12 mt-2">
                <h5 class=""><b>Informações sobre Professor </b> </h5>
                <hr>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Pai </b><br>
                            <small> {{ $teachers->father }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Mãe</b><br>
                            <small> {{ $teachers->mother }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Data de Nascimento</b><br>
                            <small> {{ $teachers->birthDate }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>País</b><br>
                            <small> {{ $teachers->country }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Arquivo de Identificação</b><br>
                            <small> {{ $teachers->arquiv }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Telefone</b><br>
                            <small> {{ $teachers->tel }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Genero</b><br>
                            <small> {{ $teachers->genro }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Local de Nascimento</b><br>
                            <small> {{ $teachers->city }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Endereço</b><br>
                            <small> {{ $teachers->address }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>B.I ou Passaporte</b><br>
                            <small> {{ $teachers->biPasst }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Email</b><br>
                            <small> {{ $teachers->email }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Ano Lectivo</b><br>
                            <small> {{ $teachers->startYear }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Especialidade</b><br>
                            <small> {{ $teachers->especiality }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Esperiência</b><br>
                            <small> {{ $teachers->experience }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nível Académico</b><br>
                            <small> {{ $teachers->academicGrau}}</small>
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
                            {{ $teachers->created_at }}
                        </small><br>
                        <small class="mb-1 text-dark">
                            <b>Última Actualização:</b>
                            {{ $teachers->updated_at }}
                        </small>
                    </div>
                    <div class="col-md-4 text-dark text-right">
                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                            href='{{ url("admin/professor/edit/{$teachers->id}") }}'>
                            <i class="fa fa-edit"></i>
                            Editar
                        </a>
                        <br>

                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                            value="{{ $teachers->id }}">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </button>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('admin.extras.modal.delete.teachers.index')
@endsection

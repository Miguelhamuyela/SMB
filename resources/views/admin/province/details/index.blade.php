@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da Província')

@section('content')


    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/provincia/list') }}">Listar ProvÍncia</a>
                    > Detalhes da Província - {{ $provinces->proviceName }}

                </b></h2>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="col-12 mt-2">
                <h5 class=""><b>Informações a Província </b> </h5>
                <hr>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Província</b><br>
                            <small> {{ $provinces->proviceName }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Observação</b><br>
                            <small> {{ $provinces->obs}}</small>
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
                            {{ $provinces->created_at }}
                        </small><br>
                        <small class="mb-1 text-dark">
                            <b>Última Actualização:</b>
                            {{ $provinces->updated_at }}
                        </small>
                    </div>
                    <div class="col-md-4 text-dark text-right">
                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                            href='{{ url("admin/provincia/edit/{$provinces->id}") }}'>
                            <i class="fa fa-edit"></i>
                            Editar
                        </a>
                        <br>

                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                            value="{{ $provinces->id }}">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </button>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('admin.extras.modal.delete.province.index')
@endsection

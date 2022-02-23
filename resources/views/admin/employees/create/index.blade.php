@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Funcionários')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form  method="POST" action="{{ route('admin.employees.store') }}"     enctype="multipart/form-data">
                    @csrf

                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>
                        <a href="{{ url('admin/funcionários/list') }}">Listar Funcionários</a>
                    >  Funcionários 
                        </b></h4>
                        <hr>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        @include('forms._formEmployees.index')
                    </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn px-5 col-md-4 btn-primary">
                                    Salvar
                                </button>

                            </div>


            </form>
            </div>
        </div>

    </div>


@endsection

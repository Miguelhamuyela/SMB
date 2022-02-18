@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Funcionário ')
@section('content')

    <div class="card shadow">
        <div class="card-body">
            <h3 class="my-2 text-center">Editar Funcionário  {{$employee->name}} </h3>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
            <div class="row align-items-center">

                <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST" action="{{ route('admin.employees.update', $employee->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Funcionário </b></h4>
                        <hr>
                        @include('forms._formEmployees.index')
                    </div>








                    <div class="card-body bg-light">
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button type="submit" class="btn px-5 col-md-4 btn-primary">
                                    Salvar Alterações
                                </button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

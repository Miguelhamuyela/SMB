@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Startup')
@section('content')

    <div class="card shadow">
        <div class="card-body">
            <h3 class="my-2 text-center">Editar  {{$startup->name}} </h3>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
            <div class="row align-items-center">

                <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST" action="{{ route('admin.startup.update', $startup->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <h4 class="card-title"><b>Startups</b></h4>
                        <hr>
                        @include('forms._formStartups.index')
                    </div>

                    <div class="card-body">
                        <h4 class="card-title"><b>Horário</b></h4>
                        <hr>
                        @include('forms._formScheldules.index')
                    </div>

                    <div class="card-body">
                        <h4 class="card-title"><b>Pagamentos</b></h4>
                        <hr>
                        @include('forms._formPayments.index')
                    </div>

                    
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-primary btn sm">Salvar Alterações</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

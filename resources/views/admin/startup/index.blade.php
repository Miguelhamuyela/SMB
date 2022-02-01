@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Utilizadores')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <form action="">
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
                        <button class="btn btn-primary btn sm">Cadastrar</button>
                    </div>
                </div>
            </div>

            </form>
            </div>
        </div>

    </div>


@endsection

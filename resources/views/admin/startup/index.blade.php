@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Utilizadores')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><b>Startups</b></h4>
                    <hr>

                    <form action="">

                    
                    @include('forms._formStartups.index')

    
                </form>

                     

                </div>

                <div class="card-body">
                    <h4 class="card-title"><b>Horário</b></h4>
                    <hr>

                    <form action="">

                    
                    @include('forms._formScheldules.index')

    
                    </form>

                     

                </div>


                <div class="card-body">
                    <h4 class="card-title"><b>Pagamentos</b></h4>
                    <hr>

                    <form action="">

                    
                    @include('forms._formPayments.index')

    
                    </form>

                     

                </div>


            </div>
        </div>

    </div>


@endsection

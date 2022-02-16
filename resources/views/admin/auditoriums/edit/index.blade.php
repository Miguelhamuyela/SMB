@extends('layouts.merge.dashboard')
@section('titulo', 'Editar Auditorio')
@section('content')

    <div class="card shadow">
        <div class="card-body">
            <h3 class="my-2 text-center">Editar  {{$auditorium->titleConference}} </h3>
            
            <div class="row align-items-center">

                <form class="col-lg-12 mt-2 col-md-12 col-12 mx-auto" method="POST" action="{{ route('admin.auditoriums.update', $auditorium->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body bg-light">
                    <h4 class="card-title"><b>Auditorio</b></h4>
                        <hr>
                        @include('forms._formAuditoriums.index')
                    </div>
                    
                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Cliente</b></h4>
                        <hr>
                        @include('forms._formClients.index')
                    </div>

                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Período do Contrato</b></h4>
                        <hr>
                        @include('forms._formScheldules.index')
                    </div>


                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Pagamentos</b></h4>
                        <hr>
                        @include('forms._formPayments.index')
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
   

@endsection

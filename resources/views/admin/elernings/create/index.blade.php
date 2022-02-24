@extends('layouts.merge.dashboard')
@section('titulo', 'Elernings')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form  method="POST" action="{{route('admin.elernings.store')}}" >
                    @csrf

                    <div class="card-body bg-light">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                     </div>
                     @endif

<<<<<<< HEAD
                        <h4 class="card-title"><b>E-learning </b></h4>
=======
                        <h4 class="card-title"><b>
                        <a href="{{ url('admin/elernings/list') }}">Listar E-learnings</a>
                        > E-learnings
                        </b></h4>
>>>>>>> 2f9b540e3a62fa45969107ab7dffd3188c640433
                        <hr>
                        @include('forms._formElernings.index')
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
                                Salvar
                            </button>

                        </div>
                    </div>
            </div>

            </form>
            </div>
        </div>

    </div>


@endsection

@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Provincia')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body bg-light">
                    <h4 class="card-title">
                        <b>
                            <a href="{{ url('admin/provincia/list') }}">Listar Provincia</a> >Cadastrar
                        </b>
                    </h4>
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
                    <form method="POST" class="row" action="{{ route('admin.provinces.store') }}"
                        enctype="multipart/form-data">
                        @csrf

                        @include('forms._formProvince.index')

                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <button type="submit" class="btn px-5 col-md-3 btn-primary">
                                    Salvar
                                </button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

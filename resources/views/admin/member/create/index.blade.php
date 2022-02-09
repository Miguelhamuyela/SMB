@extends('layouts.merge.dashboard')
@section('titulo', 'Novo Membro')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form method="POST" action="{{ url('admin/member/store/'.$startup->id) }}">
                    @csrf
                    <div class="card-body bg-light">
                        <h4 class="card-title"><b>Membros</b></h4>
                        <hr>
                        @include('forms._formMember.index')
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

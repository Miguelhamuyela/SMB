@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Startup')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Detalhes do Startup #{{ $startup->id }}
            </h2>
        </div>
    </div>
    <div class="card shadow ">
        <div class="card-body">

            <div class="">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3  page-title">{{ $startup->name }}</h2>
                        <div class="row  align-items-center">
   
                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="">
                                            <h1 class="text-white " style="font-size: 65px">Nome: {{ $startup->name }}</h1>
                                        </div>
                                        <h4 class="mb-1">{{ $startup->email }}</h4>
                                        <p class="small ">
                                            <span class="badge badge-dark">Data de Criação: {{ $startup->created_at }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                     
                                    </div>
                                    {{-- <div class="col">
                                        <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                                        <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                                        <p class="small mb-0 text-muted">(537) 315-1481</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>



@endsection

@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Utilizador')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Detalhes do Utilizador {{ $user->id }}
            </h2>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 mb-4 page-title">{{ $user->name }}</h2>
                        <div class="row mt-5 align-items-center">
                            <div class="col-md-3 text-center mb-5">
                                <div class=" rounded-circle ml-5 bg-primary" style="height: 150px; width:150px;">
                                    <h1 class="text-white p-5 " style="font-size: 65px">{{ $user->name[0] }}</h1>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4 class="mb-1">{{ $user->email }}</h4>
                                        <p class="small mb-3">
                                            <span class="badge badge-dark">Data de Criação: {{ $user->created_at }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <h4 class="mb-1">
                                            <b>Nivel de Acesso:</b>
                                            {{ $user->level }}

                                        </h4>
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


    <div class="section-body mt-4">

        <div class="card shadow mb-4">
            <div class="card-body">

                <h4 class="my-3 text-center">Registo de Actividade</h4>
                <div class="table-responsive">


                    <table id="dataTable-1" class="table  table-striped mb-3">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>CAMINHO</th>
                                <th>IP</th>
                                <th>MENSAGEM</th>
                                {{-- <th>ACÇÕES</th> --}}
                            </tr>
                        </thead>
                        <tbody class="bg-white">

                            @foreach ($logs as $item)
                                <tr class="text-center text-dark">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->PATH_INFO }} </td>
                                    <td>{{ $item->REMOTE_ADDR }} </td>
                                    <td>{{ $item->message }} </td>



                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>




@endsection

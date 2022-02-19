@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Utilizador')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 mb-4 page-title">{{ $user->name }}</h2>
                        <div class="row mt-5 align-items-center">
                            <div class="col-md-3 text-center mb-5">
                                <div class=" ml-5" style="height: 150px; width:150px;">
                                    <img src="{{ $user->photo }}" alt="">
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

                <h4 class="mt-3 mb-5 text-left"><b>Registo de Actividades</b></h4>


                <table id="dataTable-1" class="table table-striped table-bordered mb-3">
                    <thead class="bg-primary thead-dark">
                        <tr class="text-center">
                            <th>ID</th>
                            <th class="text-left">CAMINHO</th>
                            <th>IP</th>
                            <th class="text-left">MENSAGEM</th>
                            {{-- <th>ACÇÕES</th> --}}
                        </tr>
                    </thead>
                    <tbody class="bg-white">

                        @foreach ($logs as $item)
                            <tr class="text-center text-dark">
                                <td>{{ $item->id }}</td>
                                <td class="text-left">{{ $item->PATH_INFO }} </td>
                                <td>{{ $item->REMOTE_ADDR }} </td>
                                <td class="text-left">{{ $item->message }} </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>

    </div>




@endsection

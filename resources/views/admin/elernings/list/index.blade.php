@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Elernings')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><b>Elernings</b></h4>


                    <table class="table table-striped table-responsive my-5" id="dataTable-1">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>CURSO</th>
                                <th>PERÍODO</th>
                                <th>NOTA</th>
                                <th>NOME DO CLIENTE</th>
                                <th>TELEFONE</th>
                                <th>NIF</th>
                                <th>STATUS</th>
                                <th class="text-left">ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($elernings as $item)
                                <tr class="text-center text-dark">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->course }} </td>
                                    <td>{{ $item->timeCourse }} </td>
                                    <td>{{ $item->note }} </td>
                                    <td>{{ $item->clients->name }} </td>
                                    <td>{{ $item->clients->tel }} </td>
                                    <td>{{ $item->clients->nif }} </td>
                                    @if ($item->payments->status == 'Pago')
                                    <td> <button class="btn btn-success btn-sm  rounded text-white btn-sm">{{  $item->payments->status}}</button></td>
                                @else
                                <td> <button class="btn btn-danger btn-sm  rounded text-white btn-sm">{{  $item->payments->status}}</button></td>
                                @endif
                                    
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-dark text-white btn-sm dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-navicon text-white" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href='{{ url("admin/elernings/show/{$item->id}") }}'
                                                    class="dropdown-item">Detalhes</a>
                                               
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>


@endsection

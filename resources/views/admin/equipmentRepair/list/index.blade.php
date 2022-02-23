
@extends('layouts.merge.dashboard')
@section('titulo', 'Reparação  Equipamento ')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Reparação  Equipamento</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.equipmentRepair.create.index') }}" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                  <table id="dataTable-1" class="table table-striped table-bordered mb-3">
                      <thead class="bg-primary thead-dark">
                            <tr class="text-center">
                                <th>#</th>
                                <th>NOME DO EQUIPAMENTO</th>
                                <th>NOME DO CLIENTE</th>
                                <th>TELEFONE</th>
                                <th>STATUS</th>
                                <th class="text-left">ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($equipmentRepairs as $item)
                                <tr class="text-center text-dark">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->equipmentName }} </td>
                                    <td>{{ $item->clients->name }} </td>
                                    <td>{{ $item->clients->tel }} </td>
                                    @if ($item->payments->status == 'Pago')
                                            <td>
                                                <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                    {{ $item->payments->status }}</div>
                                            </td>
                                        @elseif($item->payments->status == 'Não Pago')
                                            <td>
                                                <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                    {{ $item->payments->status }}</div>
                                            </td>
                                        @elseif($item->payments->status == 'Em Validação')
                                            <td>
                                                <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                    {{ $item->payments->status }}</div>
                                            </td>
                                        @else
                                            <td>
                                                <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                                                    {{ $item->payments->status }}</div>
                                            </td>
                                        @endif
                                    <td>
                                        <a href='{{ url("admin/reparação-equipamentos/show/{$item->id}") }}' type="button"
                                            class="btn btn-icons btn-rounded btn-primary">
                                            <i class="mdi mdi-eye"></i>
                                        </a>
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

@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Pagamentos')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Pagamentos</b></h5>
                    </div>
                    <div class="col-md-2 text-center">

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable-1" class="table table-striped table-bordered mb-3">
                            <thead class="bg-primary thead-dark">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>TIPO DE PAGAMENTO</th>
                                    <th>VALORES A PAGAR</th>
                                    <th>REFERÊNCIA</th>
                                    <th>MOEDA</th>
                                    <th>ORIGEM</th>
                                    <th>STATUS</th>
                                    <th class="text-center">ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->type }} </td>
                                        <td>{{ $item->value }} </td>
                                        <td>{{ $item->reference }} </td>
                                        <td>{{ $item->currency }} </td>
                                        <td>{{ $item->origin }} </td>
                                        @if ($item->status == 'Pago')
                                            <td>
                                                <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                                    {{ $item->status }}</div>
                                            </td>
                                        @elseif($item->status == 'Não Pago')
                                            <td>
                                                <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                                    {{ $item->status }}</div>
                                            </td>
                                        @elseif($item->status == 'Em Validação')
                                            <td>
                                                <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                                    {{ $item->status }}</div>
                                            </td>
                                        @else
                                            <td>
                                                <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                                                    {{ $item->status }}</div>
                                            </td>
                                        @endif
                                        <td>
                                            <a href='{{ url("admin/pagamentos/show/{$item->id}") }}' type="button"
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

    </div>


@endsection

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
                                <th>STATUS</th>
                                <th class="text-left">ACÇÕES</th>
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
                                    @if ($item->status == 'Pago')
                                        <td> <button
                                                class="btn btn-success btn-sm rounded text-white btn-sm">{{ $item->status }}</button>
                                        </td>
                                    @else
                                        <td> <button
                                                class="btn btn-danger btn-sm  rounded text-white btn-sm">{{ $item->status }}</button>
                                        </td>
                                    @endif
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary text-white btn-sm dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-navicon text-white" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href='{{ url("admin/pagamentos/show/{$item->id}") }}'
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

    </div>


@endsection

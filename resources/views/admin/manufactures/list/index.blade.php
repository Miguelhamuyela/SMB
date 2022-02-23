@extends('layouts.merge.dashboard')
@section('titulo', 'Fábrica de Software')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Pedidos na Fábrica de Softwares</b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.manufactures.create.index') }}" class="btn btn-primary">Cadastrar</a>
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
                                <th>NOME DO SOFTWARE</th>
                                <th>NOME DO CLIENTE</th>
                                <th>TELEFONE</th>
                                <th>STATUS</th>
                                <th class="text-left">ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($manufacture as $item)
                                <tr class="text-center text-dark">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nameSoftware }} </td>
                                    <td>{{ $item->clients->name }} </td>
                                    <td>{{ $item->clients->tel }} </td>
                                    @if ($item->payments->status == 'Pago')
                                        <td> <button
                                                class="btn btn-success btn-sm  rounded text-white btn-sm">{{ $item->payments->status }}</button>
                                        </td>
                                    @else
                                        <td> <button
                                                class="btn btn-danger btn-sm  rounded text-white btn-sm">{{ $item->payments->status }}</button>
                                        </td>
                                    @endif
                                    <td>
                                        <a href='{{ url("admin/manufactures/show/{$item->id}") }}' type="button"
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

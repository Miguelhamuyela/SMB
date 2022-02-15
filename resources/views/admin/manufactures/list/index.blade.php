@extends('layouts.merge.dashboard')
@section('titulo', 'Fábrica de Software')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><b>Fábrica de Software</b></h4>


                    <table class="table table-striped my-5" id="dataTable-1">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>NOME DO SOFTWARE</th>
                                <th>CATEGORIA</th>
                                <th>DESCRIÇÃO</th>
                                <th class="text-left">ACÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($manufacture as $item)
                                <tr class="text-center text-dark">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nameSoftware }} </td>
                                    <td>{{ $item->category }} </td>
                                    <td>{{ $item->description }} </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-dark text-white btn-sm dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-navicon text-white" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a href='{{ url("admin/manufactures/show/{$item->id}") }}'
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

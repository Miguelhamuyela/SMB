@extends('layouts.merge.dashboard')
@section('titulo', 'Dashboard')
@section('content')



    <div class="row">
        <div class="col-md-12 d-none d-md-block">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Estatística De Pagamentos De Reparação de Equipamentos </h4>
                    <div class="card-options"align="left" >
                        <h6 align="right"> Total somado: {!! number_format($totalPayments, 2, ',', '.') . ' ' . 'KZ' !!} </h6>
                    </div>
                    <div class="d-flex flex-column flex-lg-row">

                    </div>
                    <div class="d-flex flex-column flex-lg-row">

                        <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas height="200" id="equipaments" style="height:10%; width:0cm "></canvas>
                </div>
            </div>
        </div>


        <div class="col-md-12 d-none d-md-block mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Estatística De Pagamentos De  Fabrica de Software </h4>
                    <div class="card-options"align="left" >
                        <h6 align="right"> Total somado: {!! number_format($totalPayments, 2, ',', '.') . ' ' . 'KZ' !!} </h6>
                    </div>

                    <div class="d-flex flex-column flex-lg-row">

                    </div>

                    <div class="d-flex flex-column flex-lg-row">

                        <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas height="200" id="startups" style="height:10%; width:0cm "></canvas>
                </div>
            </div>
        </div>

    </div>


@include('admin.extras.startup.index')
@include('admin.extras.equipmentRepair.index')

@endsection

@extends('layouts.merge.dashboard')
@section('titulo', 'Dashboard')
@section('content')



    <div class="row">
        <div class="col-md-12 d-none d-md-block">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Estatística De Pagamentos De Reparação de Equipamentos </h4>
                    <div class="card-options" align="left">
                        <h6 align="right"> Total Parcial: {!! number_format($totalEquipament, 2, ',', '.') . ' ' . 'KZ' !!} </h6>
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
                    <h4 class="card-title mb-0">Estatística De Pagamentos De Startups </h4>
                    <div class="card-options" align="left">
                        <h6 align="right"> Total Parcial: {!! number_format($totalStartups, 2, ',', '.') . ' ' . 'KZ' !!} </h6>
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

        <div class="col-md-12 d-none d-md-block mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Estatística De Pagamentos Da Fabrica de Software </h4>
                    <div class="card-options" align="left">
                        <h6 align="right"> Total Parcial: {!! number_format($totalManufacture, 2, ',', '.') . ' ' . 'KZ' !!} </h6>
                    </div>

                    <div class="d-flex flex-column flex-lg-row">

                    </div>
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas height="200" id="manufactures" style="height:10%; width:0cm "></canvas>
                </div>
            </div>
        </div>


        <div class="col-md-12 d-none d-md-block mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Estatística De Pagamentos De Cowork </h4>
                    <div class="card-options" align="left">
                        <h6 align="right"> Total Parcial: {!! number_format($totalcowork, 2, ',', '.') . ' ' . 'KZ' !!} </h6>
                    </div>

                    <div class="d-flex flex-column flex-lg-row">

                    </div>
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas height="200" id="cowork" style="height:10%; width:0cm "></canvas>
                </div>
            </div>
        </div>


        <div class="col-md-12 d-none d-md-block mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Estatística De Pagamentos De Auditório </h4>
                    <div class="card-options" align="left">
                        <h6 align="right"> Total Parcial: {!! number_format($totalAuditoriums, 2, ',', '.') . ' ' . 'KZ' !!} </h6>
                    </div>

                    <div class="d-flex flex-column flex-lg-row">

                    </div>
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas height="200" id="Auditoriums" style="height:10%; width:0cm "></canvas>
                </div>
            </div>
        </div>
    </div>
    @include('admin.extras.equipmentRepair.index')
    @include('admin.extras.Auditoriums.index')
    @include('admin.extras.cowork.index')
    @include('admin.extras.manufactures.index')
    @include('admin.extras.startup.index')
@endsection

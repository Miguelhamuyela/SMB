@extends('layouts.merge.dashboard')
@section('titulo', 'Estatística de Pagamentos')
@section('content')

    <div class="row">
        <div class="col-md-12 d-none d-md-block">
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
                        <div class="ml-lg-auto"></div>
                    </div>
                    <canvas height="200" id="cowork" style="height:10%; width:0cm "></canvas>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-4">

            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item ">
                        <a class="page-link" href="{{ route('admin.statisticsSection.index') }}"
                            tabindex="-1">Anterior</a>
                    </li>
                    <li class="page-item "><a class="page-link"
                            href="{{ route('admin.statisticsSection.index') }}">1</a></li>
                    <li class="page-item active ">
                        <a class="page-link" href="{{ route('admin.statisticsSection1.index') }}">2 <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link"
                            href="{{ route('admin.statisticsSection2.index') }}">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="{{ route('admin.statisticsSection2.index') }}">Proximo</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    @include('admin.extras.manufactures.index')
    @include('admin.extras.cowork.index')


    </center>
@endsection

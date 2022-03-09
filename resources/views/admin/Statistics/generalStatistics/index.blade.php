@extends('layouts.merge.dashboard')
@section('titulo', 'Dashboard')
@section('content')



    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Estatística  Geral de Pagamentos </h4>
                    <div class="card-options"align="left" >
                        <h6 align="right"> Total somado: {!! number_format($totalPayments, 2, ',', '.') . ' ' . 'KZ' !!} </h6>
                    </div>



                    <div class="d-flex flex-column flex-lg-row">


                    </div>

                    <div class="d-flex flex-column flex-lg-row">

                        <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas height="350" id="myChart" style="height:10%; width:0cm "></canvas>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script>
        const config = {
            type: 'line',
            data: data,
            options: {
              responsive: true,
              interaction: {
                mode: 'index',
                intersect: false,
              },
              stacked: false,
              plugins: {
                title: {
                  display: true,
                  text: 'Chart.js Line Chart - Multi Axis'
                }
              },
              scales: {
                y: {
                  type: 'linear',
                  display: true,
                  position: 'left',
                },
                y1: {
                  type: 'linear',
                  display: true,
                  position: 'right',

                  // grid line settings
                  grid: {
                    drawOnChartArea: false, // only want the grid lines for one axis to show up
                  },
                },
              }
            },
          };

    </script>

@endsection

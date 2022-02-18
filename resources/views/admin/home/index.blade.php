@extends('layouts.merge.dashboard')
@section('titulo', 'Dashboard')
@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <h3 class="mb-0 font-weight-semibold">32,451</h3>
                                    <h5 class="mb-0 font-weight-medium text-primary">Usuarios</h5>
                                    <p class="mb-0 text-muted">+14.00(+0.50%)</p>
                                </div>
                                <div class="wrapper my-auto ml-auto ml-lg-4">
                                    <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <h3 class="mb-0 font-weight-semibold">15,236</h3>
                                    <h5 class="mb-0 font-weight-medium text-primary">Startups</h5>
                                    <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                                </div>
                                <div class="wrapper my-auto ml-auto ml-lg-4">
                                    <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <h3 class="mb-0 font-weight-semibold">7,688</h3>
                                    <h5 class="mb-0 font-weight-medium text-primary">Conversation</h5>
                                    <p class="mb-0 text-muted">+57.62(+0.76%)</p>
                                </div>
                                <div class="wrapper my-auto ml-auto ml-lg-4">
                                    <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <h3 class="mb-0 font-weight-semibold">1,553</h3>
                                    <h5 class="mb-0 font-weight-medium text-primary">Downloads</h5>
                                    <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                                </div>
                                <div class="wrapper my-auto ml-auto ml-lg-4">
                                    <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Sales Statistics Overview</h4>
                    <div class="d-flex flex-column flex-lg-row">
                        <p>Lorem ipsum is placeholder text commonly used</p>
                        <ul class="nav nav-tabs sales-mini-tabs ml-lg-auto mb-4 mb-md-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="sales-statistics_switch_1" data-toggle="tab" role="tab"
                                    aria-selected="true">1D</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sales-statistics_switch_2" data-toggle="tab" role="tab"
                                    aria-selected="false">5D</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sales-statistics_switch_3" data-toggle="tab" role="tab"
                                    aria-selected="false">1M</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sales-statistics_switch_4" data-toggle="tab" role="tab"
                                    aria-selected="false">1Y</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="data-wrapper d-flex mt-2 mt-lg-0">
                            <div class="wrapper pr-5">
                                <h5 class="mb-0">Total Cost</h5>
                                <div class="d-flex align-items-center">
                                    <h4 class="font-weight-semibold mb-0">15,263</h4>
                                    <small class="ml-2 text-gray d-none d-lg-block"><b>89.5%</b> of 20,000
                                        Total</small>
                                </div>
                            </div>
                            <div class="wrapper">
                                <h5 class="mb-0">Total Revenue</h5>
                                <div class="d-flex align-items-center">
                                    <h4 class="font-weight-semibold mb-0">$753,098</h4>
                                    <small class="ml-2 text-gray d-none d-lg-block"><b>10.5%</b> of 20,000
                                        Total</small>
                                </div>
                            </div>
                        </div>
                        <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas class="mt-5" height="120" id="sales-statistics-overview"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <div class="wrapper">
                        <h4 class="card-title mb-0">Net Profit Margin</h4>
                        <p>Started collecting data from February 2019</p>
                        <div class="mb-4" id="net-profit-legend"></div>
                    </div>
                    <canvas class="my-auto mx-auto" height="250" id="net-profit"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mb-0">Total Revenue</h4>
                                <p class="font-weight-semibold mb-0">+1.37%</p>
                            </div>
                            <h3 class="font-weight-medium mb-4">184.42K</h3>
                        </div>
                        <canvas class="mt-n4" height="90" id="total-revenue"></canva>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mb-0">Transaction</h4>
                                <p class="font-weight-semibold mb-0">-2.87%</p>
                            </div>
                            <h3 class="font-weight-medium">147.7K</h3>
                        </div>
                        <canvas class="mt-n3" height="90" id="total-transaction"></canva>
                    </div>
                </div>
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-0">Market Overview</h4>
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dateSorter"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">This
                                        Month</button>
                                    <div class="dropdown-menu" aria-labelledby="dateSorter">
                                        <div class="dropdown-item" id="market-overview_1">Daily</div>
                                        <div class="dropdown-item" id="market-overview_2">Weekly</div>
                                        <div class="dropdown-item" id="market-overview_3">Monthly</div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-end">
                                <h3 class="mb-0 font-weight-semibold">$36,2531.00</h3>
                                <p class="mb-0 font-weight-medium mr-2 ml-2 mb-1">USD</p>
                                <p class="mb-0 text-success font-weight-semibold mb-1">(+1.37%)</p>
                            </div>
                            <canvas class="mt-4" height="100" id="market-overview-chart"></canvas>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title mb-4">Website Audience Metrics</h1>
                            <div class="row">
                                <div class="col-5 col-md-5">
                                    <div class="wrapper border-bottom mb-2 pb-2">
                                        <h4 class="font-weight-semibold mb-0">523,200</h4>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0">Page Views</p>
                                            <div class="dot-indicator bg-secondary ml-auto"></div>
                                        </div>
                                    </div>
                                    <div class="wrapper">
                                        <h4 class="font-weight-semibold mb-0">753,098</h4>
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0">Bounce Rate</p>
                                            <div class="dot-indicator bg-primary ml-auto"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 col-md-7 d-flex pl-4">
                                    <div class="ml-auto">
                                        <canvas height="100" id="realtime-statistics"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="icon-holder bg-primary text-white py-1 px-3 rounded mr-2">
                                            <i class="icon ion-logo-buffer icon-sm"></i>
                                        </div>
                                        <h2 class="font-weight-semibold mb-0">3,605</h2>
                                    </div>
                                    <p>Since last week</p>
                                    <p><span class="font-weight-medium">0.51%</span> (30 days)</p>
                                </div>
                                <div class="col-6">
                                    <div class="mt-n3 ml-auto" id="dashboard-guage-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">World sellings</h4>
                            <div id="dashboard-vmap" class="vector-map"></div>
                            <div class="wrapper">
                                <div class="d-flex w-100 pt-2 mt-4">
                                    <p class="mb-0 font-weight-semibold">California</p>
                                    <div class="wrapper ml-auto d-flex align-items-center">
                                        <p class="font-weight-semibold mb-0">26,437</p>
                                        <p class="ml-1 mb-0">26%</p>
                                    </div>
                                </div>
                                <div class="d-flex w-100 pt-2">
                                    <p class="mb-0 font-weight-semibold">Washington</p>
                                    <div class="wrapper ml-auto d-flex align-items-center">
                                        <p class="font-weight-semibold mb-0">3252</p>
                                        <p class="ml-1 mb-0">64%</p>
                                    </div>
                                </div>
                                <div class="d-flex w-100 pt-2">
                                    <p class="mb-0 font-weight-semibold">Michigan</p>
                                    <div class="wrapper ml-auto d-flex align-items-center">
                                        <p class="font-weight-semibold mb-0">4,987</p>
                                        <p class="ml-1 mb-0">30%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection

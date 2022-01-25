@extends('layouts.merge.site')
@section('titulo', ' Legislação')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Legislação</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== legislation Start ====== -->
    <section class="ud-blog-details">

        @if ($legislations)
            <div class="container">

                <div class="col-md-12 mb-5">
                    <p class="text-dark">

                    <h4 class="my-3">Constituição Da República De Angola</h4>
                    @foreach ($legislations as $item)
                        @if ($item->legislation == 'Constituição Da República De Angola')
                            <a href="/storage/{{ $item->file }}" class="mb-5 text-dark" target="_blank">
                                <i class="lni lni-arrow-right"></i>
                                <u>{{ $item->title }}</u>
                            </a>
                        @endif
                    @endforeach


                    <h4 class="my-3">Legislação Eleitoral</h4>
                    @foreach ($legislations as $item)
                        @if ($item->legislation == 'Legislação Eleitoral')
                            <a href="/storage/{{ $item->file }}" class="mb-5 text-dark" target="_blank">
                                <i class="lni lni-arrow-right"></i>
                                <u>{{ $item->title }}</u>
                            </a>
                        @endif
                    @endforeach

                    <h4 class="my-3">Legislação Complementar</h4>
                    @foreach ($legislations as $item)
                        @if ($item->legislation == 'Legislação Complementar')
                            <a href="/storage/{{ $item->file }}" class="mb-5 text-dark" target="_blank">
                                <i class="lni lni-arrow-right"></i>
                                <u>{{ $item->title }}</u>
                            </a>
                        @endif
                    @endforeach

                    </p>
                </div>

            </div>
        @endif
    </section>
    <!-- ====== legislation End ====== -->

@endsection

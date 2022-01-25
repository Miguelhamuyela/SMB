@extends('layouts.merge.site')
@section('titulo', 'Partidos')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>{{ $party->parties }}</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== party Details Start ====== -->
    <section class="ud-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-blog-details-image">
                        <img src="/storage/{{ $party->image }}" alt="{{ $party->iamge }}" />
                        <div class="ud-blog-overlay">
                            <div class="ud-blog-overlay-content">
                                <div class="ud-blog-author">
                                    <span>{{ $party->parties }}</span>
                                </div>
                         
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="ud-blog-details-content">

                        <div style="text-align:justify;" class="ud-blog-details-para text-justify">
                            {!! html_entity_decode($party->body) !!}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== party Details End ====== -->


@endsection

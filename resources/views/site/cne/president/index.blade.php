@extends('layouts.merge.site')
@section('titulo', ' Estrutura orgânica cadastrar')
@section('content')

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-banner-content">
                        <h1>Presidente</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== estruture Start ====== -->

    @foreach ($presidents as $item)


    {{--


        <div class="row d-flex align-items-center">
                <div class="col-lg-5 col-md-5 col-12">
                  <div class="mb-5 mb-lg-0">


                        <p style="text-align: justify;" class="mb-6">
                           A Bandeira do MPLA tem a forma rectangular,
                           dividida ao meio por duas faixas horizontais,
                           sendo a superior decor vermelha-rubro(o sangue derramado pelos
                           angolanos durante a opressão colonial)
                           e a inferior de cor preta(o continente africano),
                           tendo, ao centro, uma estrela decinco pontas de cor
                           amarelo-vivo(as riquezas do nosso País).
                        </p>

                      </div>
                    </div>
                    <div class="offset-lg-1 col-lg-6 col-md-7 col-12">
                      <div class="text-center">
                        <img src="/images/mpla.png" class="w-100" alt="Bandeira do MPLA" />
                      </div>

                    </div>
                  </div>
                </div>
              </div>

        --}}


        <section class="ud-blog-details">
            <div class="container ">
                <div class="row d-flex ">
                    <center>
                        <h3>{{ $item->title }}</h3>
                    </center><br><br><br>


                    <div style="margin-top:55px;" class="offset-lg-1 col-lg-5 col-md-5 col-12">
                        <div class="text-center">
                            <img style="" class="text-center" src="/storage/{{ $item->file }}" class="img-fluid d-block"/>
                        </div>

                      </div>


              <div class="col-lg-5 col-md-5 col-12">
                <div class="mb-5 mb-lg-0">


                    <div  style="text-align:justify;" class="col-md-12 text-justify my-5">
                        {!! html_entity_decode($item->information) !!}
                    </div>

                    </div>
                  </div>

                </div>
            </div>
        </section>
    @endforeach
    <!-- ====== estruture End ====== -->


@endsection

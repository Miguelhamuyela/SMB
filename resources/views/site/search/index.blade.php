@extends('layouts.merge.site')
@section('titulo', 'Pesquisar')
@section('content')

    <!-- ====== find Start ====== -->

    <section id="faq" class="ud-faq bg-white">
        <div class="container">

            <div class="col-lg-12">
                <div class="text-left mb-3">
                    <h3>Alguma Pergunta? </h3>
                </div>
            </div>
            <div class="col-lg-12">
                <form class="row" action="{{ route('site.search.find') }}">
                    @csrf
                   
                        <input type="text" id="rcorners2" placeholder="Digite sua pesquisa..."
                            value="{{ isset($search) ? $search : '' }}" name="search" required class="form-control py-2">
               
                        <button class="btn btn-primary" id="buttonbtn" type="submit"> <i class="lni lni-search"></i></button>
                
                </form>
            </div>


            <div class="col-lg-12 mt-2">
                @isset ($informations)

                    @if (count($informations) > 1)
                        <h5 class="mb-5">Cerca de {{ count($informations) }} resultados</h5>
                    @elseif (count($informations) == 1)
                        <h5 class="mb-5">Cerca de {{ count($informations) }} resultado</h5>
                    @endif

                    <div class="row">
                        @foreach ($informations as $item)
                            <div class="col-12 my-2">
                                <a class="text-dark" href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                    <b>{{ $item->title }}</b> <br>
                                    <small>{!! html_entity_decode(mb_substr($item->body, 0, 250, 'UTF-8')) !!}...</small>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    @if (count($informations) == 0)
                        <p class="text-dark mt-2">

                            A sua pesquisa - <b> {{ isset($search) ? $search : '' }}</b> - não encontrou nenhum documento.
                            <br><br>
                            <b>Sugestões:</b>
                            <br>
                            Certifique-se de que nenhuma palavra contém erros ortográficos. <br>
                            Tente utilizar outras palavras-chave. <br>
                            Tente palavras-chave mais gerais. <br>
                            Tente com menos palavras-chave. <br>
                        </p>
                    @endif
                @endisset

            </div>
        </div>
    </section>
    <!-- ====== find End ====== -->

@endsection
@section('CSSJS')
    <style>
        #rcorners2 {
            border-radius: 50px;
            width: 700px;
            height: 50px;

        }

        #buttonbtn {
            display: block;
            border-radius: 50px;
            width: 50px;
            height: 50px;
            margin-left: -50px;
        }

    </style>
@endsection

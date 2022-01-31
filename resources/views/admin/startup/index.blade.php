@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Notícia')

@section('content')
  

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch grid-margin">
          <div class="row flex-grow">
            <div class="col-12">

                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Startup</h4>
                    <hr>

                    <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                   
                    </form>
                    
                  
                </div>

                


                <div class="card-body">
                    <h4 class="card-title">Horário</h4>
                    <hr>
            
                    <form class="forms-sample">

                        <div class="row">
                            <div class="col">
                                <label for="inicio">Inicio</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="col">
                                <label for="fim">Fim</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                            <div class="col">
                                <label for="fim">Perespectiva</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                          </div>

                    </form>
                    
                </div>

                

                <div class="card-body">
                    <h4 class="card-title">Pagamentos</h4>
                    <hr>

                    <form class="forms-sample">
                    <div class="row">
                       <div class="col">

                        <label for="Nome">Nome</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite o nome da Startup">

                       </div>

                       <div class="col">

                        <label for="valor">Valor</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite o valor">

                       </div>

                       <div class="col">

                        <label for="referencia">Referencia</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite a referencia">

                       </div>

                       <div class="col">

                        <label for="referencia">Moeda</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Informe a referencia">

                       </div>


                    </div>
                    
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                    </form>
                    
                </div>

                </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</div>


@endsection

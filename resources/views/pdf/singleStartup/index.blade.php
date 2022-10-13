<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>singleStartup - {{ date('d-m-Y') }}</title>

    <style>

        #footer {
            padding-top: 10px;
            padding-bottom: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>

<body style='height:auto; width:100%; background: url("dashboard/images/digital.canvas.png") no-repeat center;'>
    <header>
        <img src="dashboard/images/logo_blue.png" alt="logo digital.ao" width="200">
        <br>
        <b>Data:</b> {{ date('d-m-Y') }}
        <br>

        <p>
        <h2 class="text-center">{{$singleStartup->name}}</h2>
        <hr>

        </p>
    </header>

    <section class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th>NOME DA STARTUP</th>
                    <th>NIF</th>
                    <th>SALA</th>
                    <th>EMAIL</th>
                    <th>TELEFONE</th>
                    <th>MODELO DE INCUBADORA</th>
                    <th>PERÍODO DO CONTRATO</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">

                    <td>{{$singleStartup->name}}</td>
                    <td>{{$singleStartup->nif}}</td>
                    <td>{{$singleStartup->roomName}}</td>
                    <td>{{$singleStartup->email}}</td>
                    <td>{{$singleStartup->tel}}</td>
                    <td>{{$singleStartup->incubatorModel}}</td>
                    <td>{{$singleStartup->scheldules->started}} - {{$singleStartup->scheldules->end}}</td>
                    @if ($singleStartup->payments->status == 'Pago')
                    <td>
                        <div class="btn btn-success btn-fw btn-rounded text-dark ">
                            {{ $singleStartup->payments->status }}</div>
                    </td>
                @elseif($singleStartup->payments->status == 'Não Pago')
                    <td>
                        <div class="btn btn-danger btn-fw btn-rounded text-white ">
                            {{ $singleStartup->payments->status }}</div>
                    </td>
                @elseif($singleStartup->payments->status == 'Em Validação')
                    <td>
                        <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                            {{ $singleStartup->payments->status }}</div>
                    </td>
                @else
                    <td>
                        <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                            {{ $singleStartup->payments->status }}</div>
                    </td>
                @endif
                </tr>
            </tbody>

        </table>
    </section>

    <footer class="col-12 mt-2" id="footer">
        <div class="text-right">
            <img src="dashboard/images/minttics.jpg" width="350">
        </div>
    </footer>
</body>

</html>

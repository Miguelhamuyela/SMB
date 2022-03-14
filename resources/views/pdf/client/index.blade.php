<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Relatório De Clientes</title>
</head>

<body style='height:auto; width:100%; background: url("dashboard/images/digital.canvas.png") no-repeat center;'>

    <header class="col-12 mt-2 mb-5">

        <img src="dashboard/images/logo_blue.png" alt="" width="200">

        <p>
        <h2 class="text-center">Relatório de Clientes</h2>

        @if ($origin != 'all')
            <b> Origem:</b> {{ $origin }}<br>
        @endif


        <b>Data:</b> {{ date('d-m-Y') }}
        <br>
        <b>Total de Clientes:</b> {!! count($client) !!}
        </p>
    </header>
    <section class="col-12">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th>NOME DO CLIENTE</th>
                    <th>NIF</th>
                    @if ($origin == 'all')
                        <th>ORIGEM</th>
                    @endif
                    <th>TELEFONE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($client as $item)
                    <tr class="text-center text-dark">
                        <td>{{ $item->name }} </td>
                        <td>{{ $item->nif }} </td>
                        @if ($origin == 'all')
                            <td>{{ $item->origin }} </td>
                        @endif
                        <td>{{ $item->tel }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>


    {{-- <footer class="mt-2">
       <img src="dashboard/images/minttics.jpg" alt="">
   </footer> --}}
</body>

</html>

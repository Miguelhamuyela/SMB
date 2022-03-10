<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lista De Clientes</title>
</head>

<body>

    <img src="{{ public_path('/dashboard/images/digital.png') }}" width="200" />
    <center>
        <h2>Lista de Clientes</h2> <br>
    </center>
    Origem: {{ $origin }}<br>

    Data: @php
        echo date('Y-m-d');
    @endphp

    </center><br><br><br>

    <table class="table">
        <thead>
            <tr>

                <th>NOME DO CLIENTE</th>
                <th>NIF</th>
                <th>ORIGEM</th>
                <th>TELEFONE</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($client as $item)
                <tr class="text-center text-dark">
                    <td>{{ $item->name }} </td>
                    <td>{{ $item->nif }} </td>
                    <td>{{ $item->origin }} </td>
                    <td>{{ $item->tel }}</td>

                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>

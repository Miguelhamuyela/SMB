<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lista geral de pagamentos</title>
</head>

<body>

    <img src="{{ public_path('/dashboard/images/digital.png') }}" width="200" />
    <center>
        <h2>Lista Geral de Pagamentos</h2> <br>
    </center>


    Data: {{ date('Y-m-d') }}

    </center><br><br><br>

    <table class="table">
        <thead>
            <tr>

                <th>TIPO DE PAGAMENTO</th>
                <th>Origem</th>
                <th>VALORES A PAGAR</th>
                <th>MOEDA</th>
                <th>REFERÊNCIA</th>


                <th>STATUS</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($payment as $item)
                <tr class="text-center text-dark">

                    <td>{{ $item->type }} </td>
                    <td>{{ $item->origin }} </td>
                    <td>
                        {!! number_format($item->value, 2, ',', '.') !!}

                    </td>
                    <td>{{ $item->currency }} </td>
                    <td>{{ $item->reference }} </td>

                    <td>{{ $item->status }} </td>


                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>

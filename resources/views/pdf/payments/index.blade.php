<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lista geral de pagamentos</title>
</head>

<body>

    <header class="col-12 mt-2 mb-5">

        <img src="dashboard/images/logo_blue.png" alt="">

        <p>
        <h2 class="text-center">Lista de Pagamentos</h2>

        @if ($origin !== 'All')
            <b> Origem:</b> {{ $origin }}<br>
        @endif

        <b>Data:</b> {{ date('d-m-Y') }}
        <br>
        <b>Nº Status Pago: </b>{{ $paidStatus }}<br>
        <b>Nº Status Não Pago: </b>{{ $unpaidStatus }}<br>
        <b>Valor Total pagamentos: </b>{!! number_format($totalPayments, 2, ',', '.') . ' ' . 'KZ' !!}

        </p>
    </header>



    <section class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>TIPO DE PAGAMENTO</th>
                    @if ($item->origin == 'All')
                        <th>ORIGEM</th>
                    @endif
                    <th>VALORES A PAGAR</th>
                    <th>MOEDA</th>
                    <th>REFERÊNCIA</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $item)
                    <tr class="text-center text-dark">

                        <td>{{ $item->type }} </td>
                        @if ($item->origin == 'All')
                            <td>{{ $item->origin }} </td>
                        @endif
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
    </section>


    {{-- <footer class="mt-2">
       <img src="dashboard/images/minttics.jpg" alt="">
   </footer> --}}
</body>

</html>

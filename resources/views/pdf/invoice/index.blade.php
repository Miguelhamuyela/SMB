<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fatura de Pagamento-{{ date('d-m-Y') }}</title>
    <style>
        @page {
            size: 68mm 160mm;

        }

        * {
            margin: 1%;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
        }

    </style>
</head>

<body>

    <header class="col-12">
        <p class="text-center mt-1 h5">DIGITAL.AO</p>
        <p class="text-left">Luanda, Distrito do Rangel, Bairro dos CTTs, KM-7, Parque do Saber <br>
            Telefone: [000 000 000] <br>
            NIF: [lorem3]<br>
            Email: geral@digital.ao
        </p>
        <b class="text-center  mt-1">FATURA RECIBO Nº FR [Q{{ date('Y') }}/{id}]</b>
        <p class="text-left">DATA: {{ date('d-m-Y h:i:s') }}</p>
        <p class="text-left">CLIENTE: {{ $client }}</p>
        <p class="text-left">NIF: CONSUMIDOR FINAL</p>

    </header>
    <section class="col-12 my-1">
        <p class="text-center border border-dark">
            VENDA | {{ $client }}
        </p>
        <table class="table ">
            <thead>
                <tr class="text-center">
                    <th>DESCRIÇÃO</th>
                    <th>IVA</th>
                    <th>PREÇO UNI</th>
                    <th>TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-left">{{ $service }}</td>
                    <td>0%</td>
                    <td>{!! number_format($value, 2, ',', '.') . ' ' . 'Kz' !!}</td>
                    <td>{!! number_format($value, 2, ',', '.') . ' ' . 'Kz' !!}</td>
                </tr>
            </tbody>
        </table>
    </section>


    <footer class="col-12 pb-5">
        <div class="row">
            <div class="col-6 text-left">SUBTOTAL</div>
            <div class="col-6 text-right">{!! number_format($value, 2, ',', '.') . ' ' . 'Kz' !!}</div>

            <div class="col-6 text-left">IVA</div>
            <div class="col-6 text-right">0%</div>

            <div class="col-6 text-left">TOTAL GERAL</div>
            <div class="col-6 text-right">{!! number_format($value, 2, ',', '.') . ' ' . 'Kz' !!}</div>
        </div>
        <div class="col-12 text-center">

            <img src="data:image/png;base64,{!! base64_encode($qrcode) !!}" alt="qrcode">
        </div>
        <div class="col-12">
            <small class="text-left"> UTILIZADOR: {{ Auth::user()->name }}</small> <br>
            <small class="text-left"> Regime de Exclusão</small>
        </div>
        </div>

    </footer>

</body>

</html>

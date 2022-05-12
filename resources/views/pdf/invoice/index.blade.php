<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fatura de Pagamento-{{ date('d-m-Y') }}</title>

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

    <header class="col-12 mt-2 mb-5">

        <img src="dashboard/images/logo_blue.png" alt="logo digital.ao" width="250">

        <p class="text-left">
            <b>Luanda, Distrito do Rangel, Bairro dos CTTs, KM-7 </b><br>
            <b>TELEFONE:</b> 222-692-979 <br>
            <b>NIF:</b> 5000379263<br>
            <b>EMAIL:</b> geral@digital.ao<br>
            <b>UTILIZADOR:</b> {{ Auth::user()->name }}
        </p>
        <hr>
        <p class="text-right">
            <b>CLIENTE:</b> {{ $client }} <br>
            <b>NIF:</b> {{ $nif }} <br>
            <b>DATA:</b> {{ date('d-m-Y | H:i') }}

        </p>

    </header>
    <section class="col-12 mb-5">
        <p class="text-center border border-dark">
            <b>FATURA: {{ $code }} </b> | Serviços Digitais e Incubadoras
        </p>
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th class="text-left">DESCRIÇÃO</th>
                    <th>PREÇO UNITÁRIO</th>
                    <th>SUBTOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="text-left">{{ $service }}</td>
                    <td>{!! number_format($value, 2, ',', '.') . ' ' . 'Kz' !!}</td>
                    <td>{!! number_format($value, 2, ',', '.') . ' ' . 'Kz' !!}</td>
                </tr>
            </tbody>
        </table>
    </section>


    <footer class="col-12 mt-2" id="footer">
        <table class="table table-striped">
            <tr>
                <th>SUBTOTAL:</th>
                <td>{!! number_format($value, 2, ',', '.') . ' ' . 'Kz' !!} </td>
            </tr>
            <tr>
                <th>IVA:</th>
                <td>0% - <small> Regime de Exclusão</small></td>
            </tr>
            <tr>
                <th>TOTAL GERAL:</th>
                <td>{!! number_format($value, 2, ',', '.') . ' ' . 'Kz' !!}</td>
            </tr>
        </table>

        <small class="text-left text-muted">
            Documento Processado por Computador. <br>
            OBS: O Pagamento Será Efectuado via RUPE, no Prazo de Trinta Dias (30 dias).
        </small>

        <div class="col-12 text-left mt-5">
            <img alt="qrcode" width="50" src="data:image/png;base64, {!! base64_encode($qrcode) !!} ">
            <img src="dashboard/images/minttics.jpg" width="250">
        </div>

    </footer>

</body>

</html>

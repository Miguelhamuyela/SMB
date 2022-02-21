<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Credencial de Membro da Startup</title>
    <style>

    </style>
</head>

<body>

    <h3>DIGITAL.AO</h3>
    <section>
        {{ QrCode::size(150)->generate(url('membro/startup/' . $member->nif)) }}
    </section>

</body>

</html>

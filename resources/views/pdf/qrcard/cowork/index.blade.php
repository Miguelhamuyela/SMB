<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Credencial de Membro do Cowork</title>
    <style>

    </style>
</head>

<body>

    <h3>DIGITAL.AO</h3>
    <section>
        {{ QrCode::size(150)->generate(url('membro/cowork/' . $member->nif)) }}
    </section>

</body>

</html>

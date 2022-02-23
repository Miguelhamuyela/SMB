<!DOCTYPE html>
<html lang="pt-pt">
 
<head>
    <title>Credencial de Membro do Cowork</title>
    <style>

    </style>
</head>

<body>

    <h3>DIGITAL.AO</h3>
    {{ QrCode::size(100)->generate(url('membro/cowork/' . $member->nif)) }}

</body>

</html>

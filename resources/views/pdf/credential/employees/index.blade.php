<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Passe de Funcionário</title>
    <style>
        @page {
            size: 8.5cm 5.4cm;
            margin: 10px;
        }

        * {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        section {
            margin-top: 40px;
        }

    </style>
</head>

<body style="background-image: url('dashboard/images/idcard/index.jpg');
background-position: top left;
             background-repeat: no-repeat;
             background-image-resize: 2;
             background-image-resolution: from-image;
">

    <div>
        <p style="margin-top:99px; font-size:10px;margin-right:65px;">
            {{ $Employee->name }}
        </p>
        <p style="font-size:10px; margin-top:-8px;margin-right:102px;">{{ $Employee->occupation }}</p>
        <p style="font-size:10px;margin-top:-7px;margin-right:53px; ">{{ $Employee->acronym }}</p>
        <img style="margin-top:-7px;" class="img-fluid" src="storage/{{ $Employee->photoEmployee }}" alt="{{ $Employee->name }}" width="100" height="100">

    </div>

</body>

</html>

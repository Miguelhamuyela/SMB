<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta name="description" content="sistema de gestão do digital.ao">
    <meta name="author" content="Developers infosi">

    <link rel="apple-touch-icon" sizes="180x180" href="/images/logotipo/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/logotipo/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/logotipo/icon.png">

    <title>@yield('titulo')</title>
   
   

    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>


    {{-- Editor de Texto Ckeditor --}}
    <script src="/ckeditor/ckeditor.js"></script>
</head>

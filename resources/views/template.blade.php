<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')- laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        .p {
            color: green;
            background-color: cadetblue;
        }
        .t{
            text-space: 5px;
            font-size: 20px;
        }
        .l{
            font-size: 20px;
            color: green
        }
        .o{
            width: 400px;
        }
    </style>
</head>
<body>
<header><h1 align="center" class="p">Sistema de Gerenciamento de Alunos</h1></header>
<section>
    @yield('content')
</section>
<footer><h3 align="center" class="p">Sistema de Gerenciamento de Alunos</h3></footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

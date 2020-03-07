<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>

    <style>
        .r{
            background-color: burlywood;
        }
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 40px;
            padding-right: 40px;
        }
    </style>


</head>
<body>

<h2 align="center">Relatório de alunos da escola</h2><br><br>

<table align="center">
    <tr class="r">
        <th>Nome</th>
        <th>Idade</th>
        <th>Ano</th>
        <th>Sala</th>
    </tr>
    @foreach($aluno as $alunos)
    <tr>
        <td>{{$alunos->nome}}</td>
        <td>{{$alunos->idade}}</td>
        <td>{{$alunos->Ano}}</td>
        <td>{{$alunos->sala}}</td>
    </tr>
        @endforeach
</table>







</body>
</html>

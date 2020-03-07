@extends('template')
@section('title', 'listagem de tarefas')
@section('content')

<h2 align="center">Lista de Alunos Cadastrado</h2>

<a class="waves-effect waves-light btn l o" href="{{route('cas')}}">Adicionar uma nova tarefa</a><br><br>
<a class="waves-effect waves-light btn l o" href="{{route('relator')}}">Relatorio de Alunos</a>
<br>
<br>
<div class="container">
    @if(count($list)>0)
        <table align="center" class="t responsive-table">
            <thead>
            <tr bgcolor="#5f9ea0">
                <th>Nome</th>
                <th>Ano</th>
                <th>Idade</th>
                <th>Sala</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
            <tr>
                <td>{{$item->nome}}</td>
                <td>{{$item->Ano}}</td>
                <td>{{$item->idade}}</td>
                <td>{{$item->sala}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>


    @endif
</div>

    @endsection

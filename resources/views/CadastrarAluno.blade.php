@extends('template')
@section('title', 'CadastrarAluno')
@section('content')


    <H2 align="center" >Cadastrar Alunos</H2>
    <br>  <br>

<div class="container">

    <form method="POST" class="form l">
        @csrf
       <div class="row">
           <div class="col s6">  Nome:<input type="text" name="nome"></div>
               <div class="col s6"> Ano:<input type="number" name="idade"></div>
       </div>
        <div class="row">
            <div class="col s6">  Idade:<input type="number" name="Ano"></div>
                <div class="col s6">  Sala:<input type="number" name="sala"></div>
            <input class="waves-effect waves-light btn l" type="submit" value="adicionar">
        </div>


    </form>

</div>
    <br>  <br>  <br>  <br>  <br>






    @endsection

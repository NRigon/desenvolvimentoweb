@extends('template')

@section('titulo')
fornecedor - Novo
@endsection

@section('conteudo')
<h1>Novo fornecedor</h1>
<form method="post" action="{{ route('fornecedores_novo') }}">
    @csrf
    <label>Nome</label>
    <input type="text" name="nome"><br>
    <label>endereço</label>
    <input type="text" name="endereço"><br>
    <label>cep</label>
    <input type="text" name="cep"><br>
    <label>cidade</label>
    <input type="text" name="cidade"><br>
    <label>estado</label>
    <input type="text" name="estado"><br>

    <input type="submit" value="Enviar">
</form>
@endsection
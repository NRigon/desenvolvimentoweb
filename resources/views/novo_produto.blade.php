@extends('template')

@section('titulo')
Produto - Novo
@endsection

@section('conteudo')
<h1>Novo produto</h1>
<form method="post" action="{{ route('produtos_novo') }}">
    @csrf
    <label>Nome</label>
    <input type="text" name="nome"><br>
    <label>Descrição</label>
    <input type="text" name="descricao"><br>
    <label>CodBarras</label>
    <input type="text" name="codbarras"><br>
    <label>fornecedor</label>
    <input type="text" name="fornecedor"><br>

    <input type="submit" value="Enviar">
</form>
@endsection
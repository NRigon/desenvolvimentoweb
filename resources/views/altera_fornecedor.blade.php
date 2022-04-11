@extends('template')

@section('titulo')
Alterar fornecedor - #{{ $fornecedor->id }}
@endsection

@section('conteudo')
<h1>Alterar fornecedor - #{{ $fornecedor->id }}</h1>
<form method="post" action="{{ route('fornecedores_salvar') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $fornecedor->id }}">
    <label>Nome</label>
    <input type="text" name="nome" value="{{ $fornecedor->nome }}"><br>
    <label>endereço</label>
    <input type="text" name="endereço" value="{{ $fornecedor->endereço }}"><br>
    <label>cep</label>
    <input type="text" name="cep" value="{{ $fornecedor->cep }}"><br>
    <label>cidade</label>
    <input type="text" name="cidade" value="{{ $fornecedor->cidade }}"><br>
    <label>estado</label>
    <input type="text" name="estado" value="{{ $fornecedor->estado }}"><br>

    <input type="submit" value="Enviar">
</form>
@endsection
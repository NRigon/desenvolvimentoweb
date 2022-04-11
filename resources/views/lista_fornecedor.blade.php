@extends('template')

@section('conteudo')
@routes
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>endereço</th>
            <th>cep</th>
            <th>cidade</th>
            <th>estado</th>
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($fornecedores as $c)
    <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->nome }}</td>
        <td>{{ $c->endereço }}</td>
        <td>{{ $c->cep }}</td>
        <td>{{ $c->cidade }}</td>
        <td>{{ $c->estado }}</td>
        <td>
            <a href="{{ route('fornecedores_alterar', ['id' => $c->id]) }}" class="btn btn-warning">Alterar</a>
            <a href="#" onclick="excluir({{ $c->id }})" class="btn btn-danger">Excluir</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o fornecedor ${id}?`)){
            location.href = route('fornecedores_excluir', {'id':id});
        }
    }
</script>
@endsection

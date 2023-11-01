@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Cliente</h1>

    <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
    <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
    <!-- Adicione os outros campos aqui -->

    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">Editar</a>
    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar para a lista</a>
</div>
@endsection

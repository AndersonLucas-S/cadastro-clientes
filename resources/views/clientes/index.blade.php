@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listagem de Clientes</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nome }}</td>
                <td id="telefone">{{ $cliente->telefone }}</td>
                <td id="cpf">{{ $cliente->cpf }}</td>
                <td>
                    <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info">Detalhes</a>
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('clientes.create') }}" class="btn btn-success">Novo Cliente</a>
</div>
@endsection

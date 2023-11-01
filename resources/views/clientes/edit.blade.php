@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cliente</h1>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}" required>
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="{{ $cliente->data_nascimento }}" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $cliente->cpf }}" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $cliente->telefone }}" required>
        </div>

        <div class="form-group">
            <label for="cep">CEP:</label>
            <input type="text" class="form-control" id="cep" name="cep" value="{{ $cliente->cep }}" required>
        </div>

        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $cliente->endereco }}" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" name="estado" value="{{ $cliente->estado }}" required>
        </div>

        <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $cliente->cidade }}" required>
        </div>

        <div class="form-group">
            <label for="bairro">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $cliente->bairro }}" required>
        </div>

        <div class="form-group">
            <label for="numero">Número:</label>
            <input type="text" class="form-control" id="numero" name="numero" value="{{ $cliente->numero }}" required>
        </div>

        <div class="form-group">
            <label for="complemento">Complemento:</label>
            <input type="text" class="form-control" id="complemento" name="complemento" value="{{ $cliente->complemento }}" required>
        </div>

        <div class="btn-group" style="margin-top: 9px;">
            <button type="submit" class="btn btn-primary" style="margin-right: 9px;" >Salvar</button>
            <button href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</button>
        </div>
    </form>

</div>
@endsection

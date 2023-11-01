<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request, Cliente $cliente)
    {
        $validator = Validator::make($request->all(), $cliente->rules());

        if ($validator->fails()) {
            return redirect()
                ->route('clientes.create')
                ->with('error', 'Erro ao cadastrar cliente');
        }

        Cliente::create($request->all());

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente cadastrado com sucesso');
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $validator = Validator::make($request->all(), $cliente->rules($cliente));

        if ($validator->fails()) {
            return redirect()
                ->route('clientes.edit', $cliente->id)
                ->with('error', 'Erro ao atualizar cliente');
        }

        $cliente->update($request->all());

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente atualizado com sucesso');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()
        ->route('clientes.index')
        ->with('success', 'Cliente excluído com sucesso');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'telefone', 'cep', 'endereco', 'estado', 'cidade', 'bairro', 'numero', 'complemento', 'data_nascimento', 'cpf'
    ];

    public static function rules($cliente = null)
    {
        $uniqueRule = $cliente ? 'unique:clientes,cpf,' . $cliente->id : 'unique:clientes,cpf';

        return [
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'cep' => 'required|string|max:15',
            'endereco' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'numero' => 'required|string|max:10',
            'complemento' => 'nullable|string|max:255',
            'data_nascimento' => 'required|date',
            'cpf' => [
                'required',
                'string',
                'min:14',
                $uniqueRule,
            ],
        ];
    }

}

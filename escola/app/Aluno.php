<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable =[
        'nome',
        'data_nascimento',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'cep'
    ];
}

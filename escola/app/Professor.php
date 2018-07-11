<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professores';
    protected $primaryKey = 'id_professor';
    protected $fillable = ['nome', 'data_nascimento'];
}

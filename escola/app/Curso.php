<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $primaryKey = 'id_curso';
    protected $fillable = ['nome'];
}

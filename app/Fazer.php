<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fazer extends Model
{
    protected $table = 'fazer';
    protected $fillable = ['Atividade', 'Feito'];
    public $timestamps = false;
}

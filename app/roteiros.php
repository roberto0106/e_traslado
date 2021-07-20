<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roteiros extends Model
{
    // protected $table = [''];
    
    protected $fillable = [
        'foto',
        'estado',
        'cidade',
        'local',
        'descricao'
    ];
}

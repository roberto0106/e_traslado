<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roteiros extends Model
{
    // protected $table = [''];
    
    protected $fillable = [
        'estado',
        'cidade',
        'local',
        'descricao'
    ];

/**
 * Get all of the comments for the roteiros
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function fotos()
{
    return $this->hasMany('App\photos');
}


}

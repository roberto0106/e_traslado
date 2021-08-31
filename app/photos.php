<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    
    protected $fillable = ['roteiros_id','link_photo'];
    
    /**
     * Get the roteiro that owns the photos
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roteiro()
    {
        return $this->belongsTo('App\roteiros');
    }


}

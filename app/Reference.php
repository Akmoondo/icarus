<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $fillable = [
        'uuid', 'reference' 
    ];

    public function requirements(){
        return $this->hasMany(Requirement::class, 'reference_uuid');
    }
}

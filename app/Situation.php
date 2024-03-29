<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Situation extends Model
{
    //
    protected $fillable = [
        'uuid', 'situation', 'color'
    ];

    public function requirement(){
        return $this->hasMany(Requirement::class, 'situation_uuid');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Situation extends Model
{
    //
    protected $fillable = [
        'uuid', 'situation', 'color'
    ];

    public function lgpd(){
        return $this->hasMany(LGPD::class, 'situation_uuid');
    }

    public function iso27001(){
        return $this->hasMany(ISO27001::class, 'situation_uuid');
    }
}

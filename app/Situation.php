<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Situation extends Model
{
    //
    protected $fillable = [
        'situation',
    ];

    public function lgpd(){
        return $this->hasMany(LGPD::class, 'situation_id');
    }

    public function iso27001(){
        return $this->hasMany(ISO27001::class, 'situation_id');
    }
}

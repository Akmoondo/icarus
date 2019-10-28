<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    //
    protected $fillable = [
        'uuid', 'validation', 'color'
    ];

    public function requirement(){
        return $this->hasMany(Evidences::class, 'validation_uuid');
    }
}

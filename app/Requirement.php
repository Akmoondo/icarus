<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $fillable = [
        'uuid', 'clause', 'requirement', 'brief', 'situation_uuid', 'reference_uuid', 'sector_uuid'
    ];

    public function sector(){
        return $this->hasOne(Sector::class, 'uuid', 'sector_uuid');
    }

    public function evidence(){
        return $this->hasMany(Evidence::class, 'requirement_uuid');
    }

    public function reference() {
        return $this->hasOne(Reference::class, 'uuid', 'reference_uuid');
    }

    public function situation(){
        return $this->hasOne(Situation::class, 'uuid', 'situation_uuid');
    }
   
}

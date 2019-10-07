<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectorRequiriment extends Model
{
    protected $fillable = [
        'sector_uuid', 'requirement_uuid' 
    ];

    public function  sector(){
        return $this->hasOne(Sector::class, 'uuid', 'sector_uuid');
    }

    public function  requirement(){
        return $this->hasOne(Requirement::class, 'uuid', 'requirement_uuid');
    }
}

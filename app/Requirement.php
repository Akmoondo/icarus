<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $fillable = [
        'uuid', 'clause', 'requirement', 'brief', 'situation_uuid', 'reference_uuid', 'requirement_uuid'
    ];

    public function sector_requirement(){
        return $this->hasMany(SectorRequiriment::class, 'requirement_uuid');
    }

    public function evidences(){
        return $this->hasMany(Evidence::class, 'requirement_uuid');
    }

    public function reference() {
        return $this->hasOne(Reference::class, 'uuid', 'reference_uuid');
    }

    public function situation(){
        return $this->hasOne(Situation::class, 'uuid', 'situation_uuid');
    }
   
}

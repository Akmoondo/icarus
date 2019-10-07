<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequirementEvidence extends Model
{
    protected $fillable = [
        'requirement_uuid', 'evidence_uuid' 
    ];

    public function  requirement(){
        return $this->hasOne(Requirement::class, 'uuid', 'requirement_uuid');
    }

    public function  evidence(){
        return $this->hasOne(Evidence::class, 'uuid', 'evidence_uuid');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequirementEvidence extends Model
{
    protected $fillable = [
        'requirement_uuid', 'evidence_uuid' 
    ];

    public function  requirements(){
        return $this->hasOne(Requirement::class, 'requirement_uuid', 'uuid');
    }

    public function  evidence(){
        return $this->belongsTo(Evidence::class, 'evidence_uuid', 'uuid');
    }
}

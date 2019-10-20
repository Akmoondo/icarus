<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    protected $table = 'evidences';
    
    protected $fillable = [
        'uuid', 'name', 'evidence', 'comment', 
    ];

    public function requirement_evidence(){
        return $this->hasMany(RequirementEvidence::class, 'evidence_uuid');
    }


}

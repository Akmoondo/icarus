<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    protected $table = 'evidences';
    
    protected $fillable = [
        'uuid', 'name', 'evidence', 'comment', 'requirement_uuid', 'validation_uuid'
    ];

    public function requirements(){
        return $this->hasOne(Requirement::class, 'uuid', 'requirement_uuid');
    }
    
    public function validation(){
        return $this->hasOne(Validation::class, 'uuid', 'validation_uuid');
    }


}

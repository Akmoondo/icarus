<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    protected $table = 'evidences';
    
    protected $fillable = [
        'uuid', 'evidence', 'comment', 
    ];

    public function lgpd_iso27001(){
        return $this->belongsTo(LGPD_ISO27001::class, 'evidence_uuid');
    }
}

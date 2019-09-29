<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ISO27001 extends Model
{
    protected $table = 'iso27001';

    protected $fillable = [
        'uuid', 'clause', 'requirement', 'brief', 'situation_uuid', 'sector_uuid'
    ];

    public function lgpd_iso27001 (){
        return $this->hasMany(LGPD_ISO27001::class, 'iso27001_uuid');
    }

    public function evidences(){
        return $this->hasMany(LGPD_ISO27001::class, 'evidence_uuid');
    }

    public function user_section() {
        return $this->belongsTo('App/User', 'sector_uuid');
    }

    public function situation(){
        return $this->belongsTo('App/Situation', 'situation_uuid');
    }
}

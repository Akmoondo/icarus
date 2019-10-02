<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LGPD extends Model
{
    protected $table = 'lgpd';
    protected $fillable = [
        'uuid', 'clause', 'requirement', 'brief', 'situation_uuid', 'sector_uuid'
    ];

    public function lgpd_iso27001(){
        return $this->hasMany(LGPD_ISO27001::class, 'lgpd_uuid');
    }

    public function evidences(){
        return $this->hasMany(LGPD_ISO27001::class, 'evidence_uuid');
    }

    public function sector() {
        return $this->hasOne(Sector::class, 'uuid', 'sector_uuid');
    }

    public function situation(){
        return $this->hasOne(Situation::class, 'uuid', 'situation_uuid');
    }
}

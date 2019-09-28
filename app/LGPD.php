<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LGPD extends Model
{
    protected $fillable = [
        'clause', 'requirement', 'brief', 'situation_id', 'user_section_id'
    ];

    public function evidences(){
        return $this->hasMany(Evidence::class, 'lgpd_id');
    }

    public function lgpd_iso27001(){
        return $this->hasMany(LGPD_ISO27001::class, 'lgpd_id');
    }

    public function user_section() {
        return $this->belongsTo('App/User', 'section_id');
    }

    public function situation(){
        return $this->belongsTo('App/Situation', 'situation_id');
    }
}

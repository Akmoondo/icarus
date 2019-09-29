<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LGPD_ISO27001 extends Model
{
    protected $table = 'lgpd_iso27001';
   
    protected $fillable = [
        'uuid', 'lgpd_uuid', 'iso27001_uuid', 'evidence_uuid'
    ];

    public function lgpd(){
        return $this->belongsTo('App/LGPD', 'lgpd_uuid');
    }

    public function iso27001(){
        return $this->belongsTo('App/ISO27001', 'iso27001_uuid');
    }

    public function evidence(){
        return $this->belongsTo('App/Evidence', 'iso27001_uuid');
    }
}

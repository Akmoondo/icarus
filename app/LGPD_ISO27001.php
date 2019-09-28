<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LGPD_ISO27001 extends Model
{
    protected $fillable = [
        'lgpd_id', 'iso27001_id',
    ];

    public function lgpd(){
        return $this->belongsTo('App/LGPD', 'lgpd_id');
    }

    public function iso27001(){
        return $this->belongsTo('App/ISO27001', 'iso27001_id');
    }
}

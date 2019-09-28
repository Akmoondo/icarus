<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    protected $fillable = [
        'evidence', 'comment', 'lgpd_id', 'iso27001_id',
    ];

    public function lgpd(){
        return $this->belongsTo('App/LGPD', 'lgpd_id');
    }

    public function iso27001(){
        return $this->belongsTo('App/ISO27001', 'iso27001_id');
    }
}

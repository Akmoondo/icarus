<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = [
        'uuid', 'company_uuid', 'sector',
    ];

    public function companie() {
        return $this->belongsTo('App/Company', 'company_uuid');
    }

    public function user(){
        return $this->hasMany(User::class, 'sector_uuid');
    }
}
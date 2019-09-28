<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = [
        'company_id', 'sector',
    ];

    public function companie() {
        return $this->belongsTo('App/Company', 'company_id');
    }

    public function user(){
        return $this->hasMany(User::class, 'sector_id');
    }
}
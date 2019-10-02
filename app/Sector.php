<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = [
        'uuid', 'company_uuid', 'sector',
    ];

    public function companies() {
        return $this->hasOne(Company::class, 'uuid', 'company_uuid');
    }

    public function user(){
        return $this->hasMany(User::class, 'sector_uuid');
    }
}
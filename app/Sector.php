<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = [
        'uuid',  'sector', 'company_uuid',
    ];

    public function companies() {
        return $this->hasOne(Company::class, 'uuid', 'company_uuid');
    }

    public function sector_requirement(){
        return $this->hasMany(SectorRequiriment::class, 'sector_uuid');
    }
}
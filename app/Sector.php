<?php

namespace App;

use App\Repositories\RequirementsRepository;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = [
        'uuid',  'sector', 'company_uuid',
    ];

    public function companies() {
        return $this->hasOne(Company::class, 'uuid', 'company_uuid');
    }

    public function requirement(){
        return $this->hasMany(Requirement::class, 'sector_uuid');
    }
}
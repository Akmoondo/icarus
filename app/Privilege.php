<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    protected $fillable = [
        'uuid', 'name', 'slug', 
    ];

    public function role(){
        return $this->hasMany(RolePrivilege::class, 'privilege_uuid');
    }
}

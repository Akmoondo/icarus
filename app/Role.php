<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'uuid', 'name', 
    ];

    public function  privileges(){
        return $this->hasMany(RolePrivilege::class, 'role_uuid');
    }
}

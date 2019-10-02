<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePrivilege extends Model
{
    protected $fillable = [
        'role_uuid', 'privilege_uuid' 
    ];

    public function  role(){
        return $this->hasOne(Role::class, 'uuid', 'role_uuid');
    }

    public function  privilege(){
        return $this->hasOne(Privilege::class, 'uuid', 'privilege_uuid');
    }
}

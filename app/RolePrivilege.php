<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePrivilege extends Model
{
    protected $fillable = [
        'role_uuid', 'privilege_uuid' 
    ];

    public function  role(){
        return $this->belongsTo(Role::class, 'role_uuid');
    }

    public function  privilege(){
        return $this->belongsTo(Privilege::class, 'privilege_uuid');
    }
}

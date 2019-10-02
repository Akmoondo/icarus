<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'name', 'email', 'password', 'role_uuid', 'sector_uuid',
    ];

    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sector() {
        return $this->hasOne(Sector::class,'uuid', 'sector_uuid');
    }

    public function role() {
        return $this->hasOne(Role::class,'uuid', 'role_uuid');
    }

    public function lgpd(){
        return $this->hasMany(LGPD::class, 'sector_uuid');
    }

    public function iso27001(){
        return $this->hasMany(ISO27001::class, 'sector_uuid');
    }
}

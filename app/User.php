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
        'name', 'email', 'password', 'type_id', 'sector_id',
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
        return $this->belongsTo('App/Sector', 'sector_id');
    }

    public function type() {
        return $this->belongsTo('App/Type', 'type_id');
    }

    public function lgpd(){
        return $this->hasMany(LGPD::class, 'user_sector_id');
    }

    public function iso27001(){
        return $this->hasMany(ISO27001::class, 'user_sector_id');
    }
}

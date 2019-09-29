<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Company extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'cnpj', 'name', 'email', 'telphone', 'sponsor',
    ];


    public function sector(){
        return $this->hasMany(Sector::class, 'company_uuid');
    }
}
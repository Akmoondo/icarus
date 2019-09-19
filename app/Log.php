<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['user_id', 'registro'];
    public function user(){
       return $this->hasOne(User::class, 'id', 'user_id');
    }
}

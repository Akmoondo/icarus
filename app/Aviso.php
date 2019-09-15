<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $fillable = ['user_id', 'id_requisito', 'aviso', 'urgencia'];
    public function user(){
        $this->hasOne(User::class, 'user_id');
    }
    public function requisito(){
        $this->hasOne(Requisito::class, 'id_requisito');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model
{
    //
    protected $fillable = ['user_id', 'id_requisito', 'evidencia', 'validade', 'situacao'];
    public function user(){
       return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function requisito(){
       return $this->hasOne(Requisito::class, 'id_requisito');
    }
}
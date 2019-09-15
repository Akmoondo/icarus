<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model
{
    //
    protected $fillable = ['user_id', 'id_requisito', 'evidencia', 'validade', 'situacao'];
    public function user(){
        $this->hasOne(User::class, 'user_id');
    }
    public function requisito(){
        $this->hasOne(Requisito::class, 'id_requisito');
    }
}
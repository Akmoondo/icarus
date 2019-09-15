<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
    protected $fillable = ['user_id', 'id_evidencia', 'texto'];
    public function user(){
        $this->hasOne(User::class, 'user_id');
    }
    public function evidencia(){
        $this->hasOne(Evidencia::class, 'id_evidencia');
    }
}

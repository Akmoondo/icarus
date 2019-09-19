<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    
    protected $fillable = ['user_id', 'requisito', 'artigo', 'descricao', 'comparacao'];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function evidencias(){
        return $this->hasMany(Evidencia::class, 'id_requisito');
    }
}

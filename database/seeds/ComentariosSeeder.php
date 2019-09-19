<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Comentario;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            Requisito::create([
                'user_id' => rand(1, 3),
                'id_evidencia' => rand(1, 10),
                'texto' => Str::rand(20)
            ]);
        }
    }
}
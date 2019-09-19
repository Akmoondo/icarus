<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Aviso;

class AvisosSeeder extends Seeder
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
                'id_requisito' => rand(1, 10),
                'aviso' => Str::rand(20),
                'urgencia' => Str::rand(8)
            ]);
        }
    }
}
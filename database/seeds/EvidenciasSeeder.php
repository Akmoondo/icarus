<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Evidencia;

class EvidenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            Evidencia::create([
                'user_id' => rand(1, 3),
                'id_requisito' => rand(1, 10),
                'evidencia' => Str::rand(20),
                'validade' => Str::rand(10),
                'situacao' => Str::rand(8),
            ]);
        }
    }   
}
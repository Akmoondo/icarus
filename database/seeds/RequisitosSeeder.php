<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Requisito;

class RequisitosSeeder extends Seeder
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
                'requisito' => rand(1, 10),
                'artigo' => Str::rand(5),
                'descricao' => Str::rand(50),
                'comparacao' => Str::rand(4),
            ]);
        
        }

        //factory(App\Requisito::class, 10)-> create();
    }
}

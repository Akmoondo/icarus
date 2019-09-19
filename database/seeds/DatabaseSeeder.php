<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       // $this->call(RequisitosSeeder::class);
        DB::table('avisos')->insert([   
        'user_id' => rand(1, 3),
        'requisito' => rand(1, 10),
        'artigo' => Str::random(5),
        'descricao' => Str::random(50),
        'comparacao' => Str::random(4),
        ]);
    }
}

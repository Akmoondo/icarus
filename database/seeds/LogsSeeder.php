<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Log;
class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            Log::create([
                'user_id' => rand(1, 3),
                'registro' => Str::rand(50)
            ]);
        }
    }
}
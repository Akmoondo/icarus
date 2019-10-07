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
        //$this->call(UsersTableSeeder::class);
        //$this->call(RequisitosSeeder::class);
        //factory('App\User', 3)->create();
        //factory('App\Situation', 3)->create();
        factory('App\Sector', 3)->create();
        factory('App\Role', 3)->create();
        factory('App\Privilege', 3)->create();
        factory('App\Evidence', 3)->create();
        factory('App\Requirement', 3)->create();
        factory('App\Company', 3)->create();
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLgpd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lgpd', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('clause');
            $table->string('requirement');
            $table->string('brief');
            $table->uuid('situation_uuid');
            $table->uuid('sector_uuid');

            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lgpd');
    }
}

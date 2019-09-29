<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIso27001 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iso27001', function (Blueprint $table) {
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
        Schema::dropIfExists('iso27001');
    }
}

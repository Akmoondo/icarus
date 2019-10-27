<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEvidence extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidences', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('name', 45);
            $table->string('evidence');
            $table->text('comment', 500)->nullable();

            $table->uuid('reference_uuid');
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
        Schema::dropIfExists('evidences');
    }
}

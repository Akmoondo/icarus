<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLgpdIso27001 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lgpd_iso27001', function (Blueprint $table) {
            $table->uuid('lgpd_uuid')->nullable();
            $table->uuid('iso27001_uuid')->nullable();
            $table->uuid('evidence_uuid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lgpd_iso27001');
    }
}

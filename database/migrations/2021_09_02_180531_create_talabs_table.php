<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talabs', function (Blueprint $table) {
            $table->id();
            $table->string('serves');
            $table->string('name');
            $table->string('commerc_name');
            $table->string('mob');
            $table->string('email');
            $table->string('detale');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talabs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('ingredients');
            $table->text('instructions');
            $table->integer('time');
            $table->integer('serving');
            $table->integer('calories');
            $table->integer('net_carbs');
            $table->integer('carbs');
            $table->integer('fat');
            $table->integer('proteins');
            $table->text('nutrients');
            $table->text('benefits');
            $table->string('thumbnail');
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
        Schema::dropIfExists('recipes');
    }
};

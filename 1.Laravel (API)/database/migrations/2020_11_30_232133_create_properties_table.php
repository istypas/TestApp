<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id('__pk')->unique();
            $table->integer('_fk_location');
            $table->string('property_name');
            $table->tinyInteger('near_beach')->default('0');
            $table->tinyInteger('accepts_pets')->default('0');
            $table->tinyInteger('sleeps')->default('0');
            $table->tinyInteger('beds')->default('0');
            $table->string('img');
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
        Schema::dropIfExists('properties');
    }
}

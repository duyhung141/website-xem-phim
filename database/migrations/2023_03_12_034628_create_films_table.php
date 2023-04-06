<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->string('path');
            $table->year('year');
            $table->unsignedTinyInteger('country_id');
            $table->unsignedTinyInteger('category_id');
            $table->unsignedTinyInteger('director_id');
            $table->unsignedTinyInteger('actor_id');
            $table->unsignedInteger('views');
            $table->binary('is_hot');
            $table->binary('is_oscar');
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
        Schema::dropIfExists('films');
    }
}

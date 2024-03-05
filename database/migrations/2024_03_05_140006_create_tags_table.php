<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // creation de ntre table Tags
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });
        //creation du table film_tag pour fair relation entre tags et films
        Schema::create('film_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("film_id")->nullable();
            $table->foreign("film_id")->references("id")->on('films');

            $table->unsignedBigInteger("tag_id")->nullable();
            $table->foreign("tag_id")->references("id")->on('tags');
          
            $table->timestamps();
        });
        


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};

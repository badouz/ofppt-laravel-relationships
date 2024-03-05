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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->date('release_date');
            $table->unsignedBigInteger("director_id")->nullable();
            $table->foreign("director_id")->references("id")->on('directors');
            $table->unsignedBigInteger("category_id")->nullable();
            $table->foreign("category_id")->references("id")->on('categories');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};

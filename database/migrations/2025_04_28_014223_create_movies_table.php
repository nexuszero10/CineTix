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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->unique('unique_title_movie');
            $table->integer('duration')->unsigned();
            $table->string('director', 255);
            $table->string('cast', 255);
            $table->year('realese_date');
            $table->integer('price');
            $table->text('synopsis');
            $table->string('image_path', 255);
            $table->string('url_traileer_embed', 255);
            $table->foreignId('category_id')->constrained('categories', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};

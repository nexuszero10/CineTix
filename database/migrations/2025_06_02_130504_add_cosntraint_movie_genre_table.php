<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Hapus foreign key lama (nama FK default Laravel: movie_genre_movie_id_foreign)
        Schema::table('movie_genre', function (Blueprint $table) {
            $table->dropForeign(['movie_id']);
        });

        // Tambahkan foreign key baru dengan ON DELETE CASCADE
        Schema::table('movie_genre', function (Blueprint $table) {
            $table->foreign('movie_id')
                  ->references('id')
                  ->on('movies')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hapus foreign key yang pakai cascade
        Schema::table('movie_genre', function (Blueprint $table) {
            $table->dropForeign(['movie_id']);
        });

        // Kembalikan foreign key biasa tanpa cascade
        Schema::table('movie_genre', function (Blueprint $table) {
            $table->foreign('movie_id')
                  ->references('id')
                  ->on('movies');
        });
    }
};

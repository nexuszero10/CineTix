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
        Schema::table('movies', function (Blueprint $table) {
            $table->renameColumn('realese_date', 'release_year');
            $table->renameColumn('url_traileer_embed', 'trailer_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->renameColumn('release_year', 'realese_date');
            $table->renameColumn('trailer_url', 'url_traileer_embed');
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class UpdateSchedulesTable extends Migration
{
    public function up(): void
    {
        // 1. Ganti enum dulu ke format yang menerima semua nilai (sementara gabungkan semua enum)
        DB::statement("ALTER TABLE schedules MODIFY status ENUM('complete', 'ongoing', 'showing', 'not_showing') NULL");

        // 2. Baru ubah data
        DB::table('schedules')->where('status', 'complete')->update(['status' => 'not_showing']);
        DB::table('schedules')->where('status', 'ongoing')->update(['status' => 'showing']);

        // 3. Sekarang aman untuk ubah enum final
        DB::statement("ALTER TABLE schedules MODIFY status ENUM('showing', 'not_showing') NULL");

        // 4. Kolom lain
        Schema::table('schedules', function (Blueprint $table) {
            $table->unsignedBigInteger('movie_id')->nullable()->change();
            $table->string('day')->nullable(false)->change();
        });
    }

    public function down(): void
    {
        // 1. Ubah enum dulu agar bisa rollback data
        DB::statement("ALTER TABLE schedules MODIFY status ENUM('complete', 'ongoing', 'showing', 'not_showing') NULL");

        // 2. Rollback datanya
        DB::table('schedules')->where('status', 'not_showing')->update(['status' => 'complete']);
        DB::table('schedules')->where('status', 'showing')->update(['status' => 'ongoing']);

        // 3. Ubah enum kembali ke awal
        DB::statement("ALTER TABLE schedules MODIFY status ENUM('complete', 'ongoing') DEFAULT 'ongoing'");

        // 4. Kembalikan kolom lain
        Schema::table('schedules', function (Blueprint $table) {
            $table->unsignedBigInteger('movie_id')->nullable(false)->change();
            $table->string('day')->nullable()->change();
        });
    }
}


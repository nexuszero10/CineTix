<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Ubah kolom start_date jadi nullable
        Schema::table('timelines', function (Blueprint $table) {
            $table->date('start_date')->nullable()->change();
            $table->dropColumn('end_date'); // Hapus kolom end_date
        });

        // Hapus trigger lama
        DB::unprepared("DROP TRIGGER IF EXISTS trg_check_timeline_before_insert");
        DB::unprepared("DROP TRIGGER IF EXISTS trg_check_timeline_before_update");

        // Buat trigger baru: logika berdasarkan status
        DB::unprepared("
            CREATE TRIGGER trg_check_timeline_before_insert
            BEFORE INSERT ON timelines
            FOR EACH ROW
            BEGIN
                IF NEW.status = 'coming_soon' THEN
                    IF NEW.start_date IS NULL THEN
                        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Start date must be set for coming soon movies.';
                    END IF;
                    IF NEW.start_date <= CURDATE() THEN
                        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Start date for coming soon must be greater than today.';
                    END IF;
                END IF;
            END
        ");

        DB::unprepared("
            CREATE TRIGGER trg_check_timeline_before_update
            BEFORE UPDATE ON timelines
            FOR EACH ROW
            BEGIN
                IF NEW.status = 'coming_soon' THEN
                    IF NEW.start_date IS NULL THEN
                        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Start date must be set for coming soon movies.';
                    END IF;
                    IF NEW.start_date <= CURDATE() THEN
                        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Start date for coming soon must be greater than today.';
                    END IF;
                END IF;
            END
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Tambahkan kembali end_date dan ubah start_date jadi NOT NULL
        Schema::table('timelines', function (Blueprint $table) {
            $table->date('end_date')->nullable();
            $table->date('start_date')->nullable(false)->change();
        });

        // Hapus trigger yang baru
        DB::unprepared("DROP TRIGGER IF EXISTS trg_check_timeline_before_insert");
        DB::unprepared("DROP TRIGGER IF EXISTS trg_check_timeline_before_update");
    }
};

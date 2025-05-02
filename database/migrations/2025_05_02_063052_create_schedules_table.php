<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained('movies', 'id');
            $table->foreignId('studio_id')->constrained('studios', 'id');
            $table->date('date');
            $table->time('time');
            $table->string('day');
            $table->integer('capacity');
            $table->enum('status', ['complete', 'ongoing'])->default('ongoing');
            $table->timestamps();

            // Pastikan jadwal unik per studio, tanggal dan waktu
            $table->unique(['studio_id', 'date', 'time'], 'unique_schedule_per_studio_time');
        });

        // Trigger: set day saat insert
        DB::unprepared("
            CREATE TRIGGER set_day_on_insert
            BEFORE INSERT ON schedules
            FOR EACH ROW 
            BEGIN
                SET NEW.day = DAYNAME(NEW.date);
            END
        ");

        // Trigger: update day saat tanggal berubah
        DB::unprepared("
            CREATE TRIGGER update_day_on_update
            BEFORE UPDATE ON schedules
            FOR EACH ROW 
            BEGIN
                IF NEW.date <> OLD.date THEN
                    SET NEW.day = DAYNAME(NEW.date);
                END IF;
            END
        ");

        // Trigger: ketika status berubah jadi complete, reschedule otomatis
        DB::unprepared("
            CREATE TRIGGER update_schedule_on_status_complete 
            BEFORE UPDATE ON schedules
            FOR EACH ROW 
            BEGIN
                IF NEW.status = 'complete' AND OLD.status = 'ongoing' THEN
                    SET NEW.date = DATE_ADD(OLD.date, INTERVAL 7 DAY);
                    SET NEW.capacity = 24; 
                    SET NEW.status = 'ongoing'; 
                END IF;
            END
        ");
    }

    public function down(): void
    {
        DB::unprepared("DROP TRIGGER IF EXISTS set_day_on_insert");
        DB::unprepared("DROP TRIGGER IF EXISTS update_day_on_update");
        DB::unprepared("DROP TRIGGER IF EXISTS update_schedule_on_status_complete");

        Schema::dropIfExists('schedules');
    }
};

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
        Schema::create('timelines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->unique()->constrained('movies', 'id');
            $table->enum('status', ['coming_soon', 'now_showing']);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->timestamps();
        });

        // Trigger BEFORE INSERT
        DB::unprepared("
            CREATE TRIGGER trg_check_timeline_before_insert
            BEFORE INSERT ON timelines
            FOR EACH ROW
            BEGIN
                IF NEW.status = 'coming_soon' THEN
                    IF NEW.start_date <= CURDATE() THEN
                        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Start date for coming soon must be greater than today.';
                    END IF;
                    SET NEW.end_date = NULL;
                ELSEIF NEW.status = 'now_showing' THEN
                    IF NEW.start_date > CURDATE() THEN
                        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Start date for now showing must be today or earlier.';
                    END IF;
                    SET NEW.end_date = DATE_ADD(NEW.start_date, INTERVAL 7 DAY);
                END IF;
            END
        ");

        // Trigger BEFORE UPDATE
        DB::unprepared("
            CREATE TRIGGER trg_check_timeline_before_update
            BEFORE UPDATE ON timelines
            FOR EACH ROW
            BEGIN
                IF NEW.status = 'coming_soon' THEN
                    IF NEW.start_date <= CURDATE() THEN
                        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Start date for coming soon must be greater than today.';
                    END IF;
                    SET NEW.end_date = NULL;
                ELSEIF NEW.status = 'now_showing' THEN
                    IF NEW.start_date > CURDATE() THEN
                        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Start date for now showing must be today or earlier.';
                    END IF;
                    SET NEW.end_date = DATE_ADD(NEW.start_date, INTERVAL 7 DAY);
                END IF;
            END
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP TRIGGER IF EXISTS trg_check_timeline_before_insert");
        DB::unprepared("DROP TRIGGER IF EXISTS trg_check_timeline_before_update");

        Schema::dropIfExists('timelines');
    }
};

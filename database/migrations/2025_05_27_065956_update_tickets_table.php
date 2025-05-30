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
        Schema::table('tickets', function (Blueprint $table) {
            $table->enum('row_seat', ['A', 'B', 'C', 'D'])->after('schedule_id')->change();
            $table->renameColumn('order_number', 'order_id');
            $table->enum('status', ['success', 'pending', 'failed'])->after('order_id')->default('pending');
        });
    }

    public function down(): void
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->string('row_seat', 255)->after('row_number')->change();
            $table->renameColumn('order_id', 'order_number');
            $table->dropColumn('status');
        });
    }
};

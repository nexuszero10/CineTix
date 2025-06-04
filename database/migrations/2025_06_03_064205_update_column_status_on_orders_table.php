<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        // Ubah enum status menjadi unpaid/paid
        DB::statement("ALTER TABLE orders MODIFY status ENUM('unpaid', 'paid') NOT NULL DEFAULT 'unpaid'");
    }

    public function down(): void
    {
        // Kembalikan enum status seperti semula
        DB::statement("ALTER TABLE orders MODIFY status ENUM('pending', 'failed', 'success') NOT NULL DEFAULT 'pending'");
    }
};

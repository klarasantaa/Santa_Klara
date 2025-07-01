<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    protected string $table = 'gudangs';

    /**
     * Tambahkan kolom jumlah_stok
     */
    public function up(): void
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->unsignedInteger('jumlah_stok')->default(0);
        });
    }

    /**
     * Hapus kolom jumlah_stok saat rollback
     */
    public function down(): void
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->dropColumn('jumlah_stok');
        });
    }
};

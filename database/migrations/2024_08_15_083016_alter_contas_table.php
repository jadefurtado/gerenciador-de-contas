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
        Schema::table('contas', function (Blueprint $table) {
            // Adiciona a coluna deleted_at
            // adicionar o softDeletes na model
            $table->softDeletes()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // rollback
        Schema::table('contas', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};

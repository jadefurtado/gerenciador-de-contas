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
            // Adiciona a coluna `situacao_conta_id` como chave estrangeira
            $table->foreignId('situacao_conta_id')->default(2)->after('vencimento')->constrained('situacoes_contas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // rollback
        Schema::table('contas', function (Blueprint $table) {
            // Remove a chave estrangeira e a coluna
            $table->dropForeign(['situacao_conta_id']);
            $table->dropColumn('situacao_conta_id');
        });
    }
};

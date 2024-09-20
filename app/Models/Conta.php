<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conta extends Model
{
    use HasFactory, SoftDeletes;

    // Indicar o nome da tabela
    protected $table = 'contas';

    // Indicar quais colunas podem ser cadastradas
    protected $fillable = ['nome', 'valor', 'vencimento', 'situacao_conta_id'];

    // nome da função deve ter o mesmo nome da model da tabela destino no singular (padronizar)
    public function situacaoConta() {
        // a tabela filha usa o belongsTo
        return $this->belongsTo(SituacaoConta::class);
    }

}

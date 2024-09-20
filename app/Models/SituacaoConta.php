<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SituacaoConta extends Model
{
    use HasFactory;

    // Indicar o nome da tabela
    protected $table = 'situacoes_contas';

    // Indicar quais colunas podem ser cadastradas
    protected $fillable = ['nome', 'cor'];

    // nome da função deve ter o mesmo nome da model da tabela destino (padronizar)
    public function conta() {
        // indicar o relacionamento 1:N
        return $this->hasMany(Conta::class);
    }
}

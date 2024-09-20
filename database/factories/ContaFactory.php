<?php

namespace Database\Factories;

use App\Models\Conta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conta>
 */
class ContaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Conta::class;

    /**
     * Lista de nomes realistas para contas.
     *
     * @var array
     */
    protected $nomes = [
        'Conta de Luz',
        'Conta de Água',
        'Internet',
        'Telefone',
        'Mensalidade Escola',
        'Seguro Veicular',
        'Assinatura Streaming',
        'Aluguel',
        'Imposto de Renda',
        'Plano de Saúde',
    ];

    public function definition(): array
    {
        return [
                'nome' => $this->faker->randomElement($this->nomes), // Escolhe um nome aleatório da lista
                'valor' => $this->faker->randomFloat(2, 10, 1000), // Gera um valor decimal aleatório com 2 casas decimais
                'vencimento' => $this->faker->dateTimeBetween('2024-08-01', '2024-12-31')->format('Y-m-d'), // Gera uma data aleatória no ano de 2024
        ];
    }
}

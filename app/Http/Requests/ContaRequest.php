<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required',
            'valor' => 'required|max:999999|numeric', 
            'vencimento' => 'required',
            'situacao_conta_id' => 'required'
        ];
    }

    public function messages(): array {
        return[
                'nome.required' => 'Campo nome é obrigatório!',
                'valor.required' => 'Campo valor é obrigatório!',
                'valor.numeric' => 'Campo valor é obrigatório!',
                'valor.max' => 'O preço só pode ter no máximo 8 números!',
                'vencimento.required' => 'Campo vencimento é obrigatório!',
                'situacao_conta_id.required' => 'Campo situação da conta é obrigatório!'
        ];
    }

    // remover a máscara do valor do campo antes de realizar a validação
    public function prepareForValidation()
{
    // o merge prepara os dados antes da validação
    $valor = floatval(str_replace(',', '.', str_replace('.', '', $this->valor)));
    $this->merge([
        'valor' => $valor == 0 ? null : $valor ,
    ]);
}

}

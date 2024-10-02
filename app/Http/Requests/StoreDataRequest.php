<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Permitir o Request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',                 // String
            'email' => 'required|email|unique:users,email',     // Email
            'idade' => 'required|integer|min:18|max:100',       // Inteiro
            'data_nascimento' => 'required|date|before:today',  // Data
            'telefone' => 'nullable|string|min:10|max:15',      // String
            'senha' => 'required|string|min:8',                  // String
            'senha_confirmation' => 'required|same:senha',       // Confirmação de senha
        ];
    }

    /**
     * Get the custom messages for the validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O email deve ser um endereço de email válido.',
            'email.unique' => 'Este email já está em uso.',
            'idade.required' => 'O campo idade é obrigatório.',
            'idade.integer' => 'A idade deve ser um número inteiro.',
            'idade.min' => 'A idade deve ser pelo menos 18 anos.',
            'idade.max' => 'A idade não pode ser maior que 100 anos.',
            'data_nascimento.required' => 'O campo data de nascimento é obrigatório.',
            'data_nascimento.date' => 'A data de nascimento deve ser uma data válida.',
            'data_nascimento.before' => 'A data de nascimento deve ser anterior a hoje.',
            'telefone.min' => 'O telefone deve ter pelo menos 10 caracteres.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.min' => 'A senha deve ter pelo menos 8 caracteres.',
            'senha_confirmation.required' => 'A confirmação da senha é obrigatória.',
            'senha_confirmation.same' => 'A confirmação da senha deve ser igual à senha.',
        ];
    }
}

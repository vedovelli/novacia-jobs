<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class JobRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'jobs_nome' => 'required|min:4',
            'user_id' => 'required',
            'jobs_cliente' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'jobs_nome.required' => 'O campo nome é obrigatório',
            'jobs_nome.min' => 'O campo nome precisa ter pelo menos 4 caracteres',
            'user_id.required' => 'O campo responsável é obrigatório',
            'jobs_cliente.required' => 'O campo cliente é obrigatório',
        ];
    }
}

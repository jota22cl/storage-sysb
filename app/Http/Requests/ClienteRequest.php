<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;   // oprioginalmente esta en FALSE
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'codigo' => 'required|max:10',
            'nombre' => 'required|max:150',
            'sigla' => 'max:50',
            'direccion' => 'max:150',
            'comuna' => 'max:30',
            'ciudad' => 'max:30',
        ];
    }
}

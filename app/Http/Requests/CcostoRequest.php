<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CcostoRequest extends FormRequest
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
            'descripcion' => 'required|max:40',
        ];
/*
        return [
            'codigo' => 'required|unique:ccostos|max:10',
            'descripcion' => 'required|unique:ccostos|max:30',
            'vigente' => 'required',
        ];
*/
    }
}

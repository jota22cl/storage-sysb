<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonedaRequest extends FormRequest
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
            'moneda' => 'required|max:30',
            'simbolo' => 'required|max:5',
        ];
/*
        return [
            'codigo' => 'required|unique:monedas|max:10',
            'descripcion' => 'required|unique:monedas|max:30',
            'vigente' => 'required',
        ];
*/
    }
}

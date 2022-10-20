<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validar extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //false | true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //3 requerimietos para el proyecto
        return [
            'clave' => 'required|regex:/^[0-9]{9}$/', //222110811
            'nombre' => 'required',
            'app' => 'required',
            'ap' => 'required',
            'fn' => 'required',
            'email' => 'required|email',
            'pass' => 'required'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadosRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'direccion' => 'required',
            'puesto' => 'required',
            'telefono' => 'required',
            'correo' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Por favor, escribe un nombre para el empleado.',
            'correo.email' => 'Debes escribir una dirección de correo válida.',
        ];
    }
}

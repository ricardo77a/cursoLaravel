<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncidenciasRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'incidencia' => 'required',
            'comentario' => 'required|max:50',
        ];
    }

    public function messages()
    {
        return [
            'incidencia.required' => 'Debes escribir una incidencia',
            'comentario.required' => 'Debes escribir un comentario acerca de la incidencia',
            'comentario.max' => 'Tu comentario debe tener menos de 50 caracteres'
        ];

    }
}

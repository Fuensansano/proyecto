<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProofMissingTeacherRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'department' => 'required|string', // Se puede añadir regla para que no sea un departamento inventado, que lo coja de un array
            'dni' => 'required|regex:/^[0-9]{8,8}[A-Za-z]$/',
            'missingDay' => 'required|date_format:Y-m-d',
            'option1' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del profesor es obligatorio',
            'department.required' => 'El departamento es obligatorio',
            'dni.required' => 'El DNI es obligatorio',
            'dni.regex' => 'El DNI tiene que tener un formato: XXXXXXXXA',
            'missingDay.required' => 'El día de falta es obligatorio',
            'missingDay.date_format' => 'El día de falta debe tener un formato válido',
            'option1.required' => 'Es obligatorio elegir una opción de las dos',
        ];
    }
}

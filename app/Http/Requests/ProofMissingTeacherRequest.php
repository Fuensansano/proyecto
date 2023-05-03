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
            'missingDay' => 'required|date_format:Y-m-d',
            'fullDay' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del profesor es obligatorio',
            'department.required' => 'El departamento es obligatorio',
            'missingDay.required' => 'El día de falta es obligatorio',
            'missingDay.date_format' => 'El día de falta debe tener un formato válido',
            'fullDay.required' => 'Debes seleccionar si es jornada completa o no'
        ];
    }
}

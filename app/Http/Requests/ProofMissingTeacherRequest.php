<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProofMissingTeacherRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'department' => 'required|string', // Se puede añadir regla para que no sea un departamento inventado, que lo coja de un array
            'dni' => 'required|regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i',

            'missingDay1' => 'required|date_format:Y-m-d',
            'journeyType1' => 'required',
            'journeyStartTime1' => 'exclude_if:journeyType1,fullJourneyOption1|required|date_format:H:i',
            'journeyEndTime1' => 'exclude_if:journeyType1,fullJourneyOption1|required|date_format:H:i',

            'missingDay2' => 'nullable|date_format:Y-m-d',
            'journeyType2' => 'nullable',
            'journeyStartTime2' => 'nullable|date_format:H:i',
            'journeyEndTime2' => 'nullable|date_format:H:i',

            'missingDay3' => 'nullable|date_format:Y-m-d',
            'journeyType3' => 'nullable',
            'journeyStartTime3' => 'nullable|date_format:H:i',
            'journeyEndTime3' => 'nullable|date_format:H:i',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del profesor es obligatorio',
            'department.required' => 'El departamento es obligatorio',
            'dni.required' => 'El DNI es obligatorio',
            'dni.regex' => 'El DNI tiene que tener un formato: XXXXXXXXA',

            'missingDay1.required' => 'El día de falta es obligatorio',
            'missingDay1.date_format' => 'El día de falta debe tener un formato válido',
            'journeyType1.required' => 'Es obligatorio elegir una opción de las dos',
            'journeyStartTime1.required' => 'Ambas horas son obligatorias si se ha marcado la segunda opción',
            'journeyStartTime1.date_format' => 'Ambas horas deben tener un formato válido',
            'journeyEndTime1.required' => 'Ambas horas son obligatorias si se ha marcado la segunda opción',
            'journeyEndTime1.date_format' => 'Ambas horas deben tener un formato válido',

            'missingDay2.date_format' => 'El día de falta debe tener un formato válido',
            'journeyStartTime2.date_format' => 'Ambas horas deben tener un formato válido',
            'journeyEndTime2.date_format' => 'Ambas horas deben tener un formato válido',

            'missingDay3.date_format' => 'El día de falta debe tener un formato válido',
            'journeyStartTime3.date_format' => 'Ambas horas deben tener un formato válido',
            'journeyEndTime3.date_format' => 'Ambas horas deben tener un formato válido',
        ];
    }
}

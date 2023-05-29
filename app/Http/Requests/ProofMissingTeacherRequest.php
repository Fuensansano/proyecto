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
            'journey_option1' => 'required',
            'midJourneyFrom1' => 'exclude_if:journey_option1,full_journey_option1|required|date_format:H:i',
            'midJourneyTo1' => 'exclude_if:journey_option1,full_journey_option1|required|date_format:H:i',

            'missingDay2' => 'exclude_if:missingDay2,==,null|required|date_format:Y-m-d',
            'journey_option2' => 'requiredIf:missingDay2,!=,null',
            'midJourneyFrom2' => 'exclude_if:journey_option2,full_journey_option2|required|date_format:H:i',
            'midJourneyTo2' => 'exclude_if:journey_option2,full_journey_option2|required|date_format:H:i',

            'missingDay3' => 'exclude_if:missingDay3,==,null|required|date_format:Y-m-d',
            'journey_option3' => 'requiredIf:missingDay3,!=,null',
            'midJourneyFrom3' => 'exclude_if:journey_option3,full_journey_option3|required|date_format:H:i',
            'midJourneyTo3' => 'exclude_if:journey_option3,full_journey_option3|required|date_format:H:i',
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
            'journey_option1.required' => 'Es obligatorio elegir una opción de las dos',
            'midJourneyFrom1.required' => 'Ambas horas son obligatorias si se ha marcado la segunda opción',
            'midJourneyFrom1.date_format' => 'Ambas horas deben tener un formato válido',
            'midJourneyTo1.required' => 'Ambas horas son obligatorias si se ha marcado la segunda opción',
            'midJourneyTo1.date_format' => 'Ambas horas deben tener un formato válido',

            'missingDay2.required_if' => 'El día de falta es obligatorio si se rellena',
            'missingDay2.date_format' => 'El día de falta debe tener un formato válido',
            'journey_option2.required_if' => 'Es obligatorio elegir una opción de las dos si se rellena el campo de día faltado',
            'midJourneyFrom2.required' => 'Ambas horas son obligatorias si se ha marcado la segunda opción',
            'midJourneyFrom2.date_format' => 'Ambas horas deben tener un formato válido',
            'midJourneyTo2.required' => 'Ambas horas son obligatorias si se ha marcado la segunda opción',
            'midJourneyTo2.date_format' => 'Ambas horas deben tener un formato válido',

            'missingDay3.required_if' => 'El día de falta es obligatorio si se rellena',
            'missingDay3.date_format' => 'El día de falta debe tener un formato válido',
            'journey_option3.required_if' => 'Es obligatorio elegir una opción de las dos si se rellena el campo de día faltado',
            'midJourneyFrom3.required' => 'Ambas horas son obligatorias si se ha marcado la segunda opción',
            'midJourneyFrom3.date_format' => 'Ambas horas deben tener un formato válido',
            'midJourneyTo3.required' => 'Ambas horas son obligatorias si se ha marcado la segunda opción',
            'midJourneyTo3.date_format' => 'Ambas horas deben tener un formato válido',
        ];
    }
}

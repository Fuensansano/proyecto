<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutorizacionFamiliarRequest extends FormRequest
{
    public function rules()
    {
        return [
            'activity' => 'required|string',
            'organizer' => 'required|string',
            'execution_date' => 'required|date',
            'departure_time' => 'required',
            'goals' => 'required|string',
            'deadline' => 'required|date',
            'parents' => 'required|string',
            'student' => 'required|string',
            'course' => 'required|string',
            'authorization' => 'required',
        ];
    }

    public function messages()
    {
        $messDef = 'Este campo es obligatorio';

        return [
            'activity.required' => $messDef,
            'organizer.required' => $messDef,
            'execution_date.required' => $messDef,
            'execution_date.date' => 'La feche debe tener un formato válido',
            'departure_time.required' => $messDef,
            'goals.required' => $messDef,
            'deadline.required' => $messDef,
            'parents.required' => $messDef,
            'student.required' => $messDef,
            'course.required' => $messDef,
            'authorization.required' => $messDef,
        ];
    }
}

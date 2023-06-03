<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FamilyAuthorizationRequest extends FormRequest
{
    public function rules()
    {
        return [
            'activity' => 'required|string',
            'organizer' => 'required|string',
            'execution_date' => 'required|date_format:Y-m-d',
            'departure_time' => 'required|date_format:H:i',
            'goals' => 'required|string',
            'deadline' => 'required|date_format:Y-m-d',
            'parents' => 'required|string',
            'student' => 'required|string',
            'course' => 'required|string',
            'authorization' => 'required',
            'dni' => ['required', 'regex:/([a-z]|[A-Z]|[0-9])[0-9]{7}([a-z]|[A-Z]|[0-9])/'],
        ];
    }

    public function messages()
    {
        return [
            'activity.required' => 'La actividad es obligatoria',
            'organizer.required' => 'El nombre del organizador es obligatorio',
            'execution_date.required' => 'La fecha de la actividad es obligatoria',
            'execution_date.date_format' => 'La fecha de la actividad debe tener un formato válido',
            'departure_time.required' => 'La hora de salida es obligatoria',
            'departure_time.date_format' => 'La hora debe tener un formato válido',
            'goals.required' => 'Los objetivos son obligatorios',
            'deadline.required' => 'La fecha de entrega de la hoja es obligatoria',
            'deadline.date_format' => 'La fecha de entrega de la hoja debe tener un formato válido',
            'parents.required' => 'El nombre del padre/madre/tutor es obligatorio',
            'student.required' => 'El nombre del alumno es obligatorio',
            'course.required' => 'El curso del alumno es obligatorio',
            'authorization.required' => 'La autorización es obligatoria',
            'dni.required' => 'El DNI del padre/madre/tutor es obligatorio',
            'dni.regex' => 'El DNI debe tener un formato válido',
        ];
    }
}

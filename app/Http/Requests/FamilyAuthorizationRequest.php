<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FamilyAuthorizationRequest extends FormRequest
{
    public function rules()
    {
        return [
            'activity' => 'required|string',
            'organizer' => 'required|string|max:100',
            'execution_date' => 'required|date_format:Y-m-d',
            'departure_time' => 'required|date_format:H:i',
            'goals' => 'required|string|max:250',
            'deadline' => 'required|date_format:Y-m-d',
            'parents' => 'required|string|max:50',
            'student' => 'required|string|max:50',
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
            'organizer.max' => 'El nombre del organizador no puede tener más de 100 carácteres',
            'execution_date.required' => 'La fecha de la actividad es obligatoria',
            'execution_date.date_format' => 'La fecha de la actividad debe tener un formato válido',
            'departure_time.required' => 'La hora de salida es obligatoria',
            'departure_time.date_format' => 'La hora debe tener un formato válido',
            'goals.required' => 'Los objetivos son obligatorios',
            'goals.max' => 'Los objetivos y contenidos no pueden tener más de 250 carácteres',
            'deadline.required' => 'La fecha de entrega de la hoja es obligatoria',
            'deadline.date_format' => 'La fecha de entrega de la hoja debe tener un formato válido',
            'parents.required' => 'El nombre del padre/madre/tutor es obligatorio',
            'parents.max' => 'El nombre del padre/madre/tutor no puede tener más de 50 carácteres',
            'student.required' => 'El nombre del alumno es obligatorio',
            'student.max' => 'El nombre del alumno no puede tener más de 50 carácteres',
            'course.required' => 'El curso del alumno es obligatorio',
            'authorization.required' => 'La autorización es obligatoria',
            'dni.required' => 'El DNI del padre/madre/tutor es obligatorio',
            'dni.regex' => 'El DNI debe tener un formato válido',
        ];
    }
}

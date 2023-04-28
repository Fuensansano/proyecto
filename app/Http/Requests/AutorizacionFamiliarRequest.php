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
        return [
            'activity.required' => 'La actividad es obligatoria',
            'organizer.required' => 'El nombre del organizador es obligatorio',
            'execution_date.required' => 'La fecha de la actividad es obligatoria',
            'execution_date.date' => 'La feche debe tener un formato válido',
            'departure_time.required' => 'La hora de salida es obligatoria',
            'goals.required' => 'Los objetivos son obligatorios',
            'deadline.required' => 'La fecha de entrega de la hoja es obligatoria',
            'parents.required' => 'El nombre del padre/madre/tutor es obligatorio',
            'student.required' => 'El nombre del alumno es obligatorio',
            'course.required' => 'El curso del alumno es obligatorio',
            'authorization.required' => 'La autorización es obligatoria',
        ];
    }
}

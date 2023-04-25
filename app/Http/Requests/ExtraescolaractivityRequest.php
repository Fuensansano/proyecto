<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExtraescolaractivityRequest extends FormRequest
{
    public function rules()
    {

        return [
            'activity_name' => 'required|string',
            'activity_place' => 'required|string',
            'activity_module' => 'required|string',
            'activity_departament' => 'required|string',
            'teachers' => 'required|string',
            'student_groups' => 'required|string',
            'date' => 'required',
            'departure_time' => 'required',
            'arrive_time' => 'required',
            'activity_price' => 'required',
            'transport' => 'required|string',
            'activity_responsible_teacher' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'activity_name.required' => 'El nombre de la actividad es obligatorio',
            'activity_place.required' => 'El lugar de la actividad debe ser obligatorio',
            'activity_module.required' => 'El modulo al que pertenece la actividad debe ser obligatorio',
            'activity_departament.required' => 'El departamento al que pertenece la actividad debe ser obligatorio',
            'teachers.required' => 'El campo profesores que van a asistir a la actividad debe ser obligatorio',
            'student_groups.required' => 'El campo grupo de estudiantes debe ser obligatorio',
            'date.required' => 'El campo fecha de la actividad debe ser obligatorio',
            'departure_time.required' => 'El campo hora de salida debe ser obligatorio',
            'arrive_time.required' => 'El campo hora de llegada debe ser obligatorio',
            'activity_price.required' => 'El campo precio de la actividad debe ser obligatorio',
            'activity_price' => 'El campo precio debe de ser obligatorio',
            'transport.required' => 'El campo transporte debe ser obligatorio',
            'activity_responsible_teacher.required' => 'El campo responsable de la actividad debe ser obligatorio',

        ];
    }
}

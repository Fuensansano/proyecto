<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExtracurricularActivityRequest extends FormRequest
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
            'date' => 'required|date_format:Y-m-d',
            'departure_time' => 'required|date_format:H:i',
            'arrive_time' => 'required|date_format:H:i',
            'activity_price' => 'required|regex:/^\d+([.,])?\d{0,2}$/',
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
            'date.date_format' => 'El campo fecha de la actividad debe ser en formato día/mes/año',
            'departure_time.required' => 'El campo hora de salida debe ser obligatorio',
            'departure_time.date_format' => 'El campo hora de salida debe de ser en formato hh:mm',
            'arrive_time.required' => 'El campo hora de llegada debe ser obligatorio',
            'arrive_time.date_format' => 'El campo hora de llegada debe de ser en formato hh:mm',
            'activity_price.required' => 'El campo precio de la actividad debe ser obligatorio',
            'activity_price.regex' => 'El campo precio debe de ser numérico y positivo',
            'transport.required' => 'El campo transporte debe ser obligatorio',
            'activity_responsible_teacher.required' => 'El campo responsable de la actividad debe ser obligatorio',

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutorizacionFamiliarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
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
        $messDef = 'Este campo es oligatorio';

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

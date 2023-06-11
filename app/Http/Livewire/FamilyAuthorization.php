<?php

namespace App\Http\Livewire;

use App\Traits\PDF;
use Livewire\Component;
use App\Http\Requests\FamilyAuthorizationRequest;

class FamilyAuthorization extends Component
{
    use PDF;

    public function render()
    {
        return view('livewire.familyAuthorization');
    }

    public function store(FamilyAuthorizationRequest $request)
    {
        date_default_timezone_set('Europe/Madrid');

        $actual_date = getdate();

        $month = [
            1 => 'Enero',
            2 => 'Febrero',
            3 => 'Marzo',
            4 => 'Abril',
            5 => 'Mayo',
            6 => 'Junio',
            7 => 'Julio',
            8 => 'Agosto',
            9 => 'Septiembre',
            10 => 'Octubre',
            11 => 'Noviembre',
            12 => 'Diciembre'
        ];

        $actual_date['mon'] = $month[$actual_date['mon']];

        $data = [
            'activity' => $request->activity,
            'organizer' => $request->organizer,
            'execution_date' => $this->dateFormat($request->execution_date),
            'departure_time' => $request->departure_time,
            'goals' => $request->goals,
            'deadline' => $this->dateFormat($request->deadline),
            'parents' => $request->parents,
            'student' => $request->student,
            'course' => $request->course,
            'authorization' => $request->authorization,
            'dni' => $request->dni,
            'day' => $actual_date['mday'],
            'month' => $actual_date['mon'],
            'year' => $actual_date['year'],
        ];

        return $this->generatePDF('pdfs.familyAuthorizationPDF', 'autorizacion familiar.pdf', $data);
    }

    public function dateFormat($date) {
        return date('d-m-Y', strtotime($date));
    }
}

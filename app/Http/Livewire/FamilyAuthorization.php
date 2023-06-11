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

        switch ($actual_date['mon']) {
            case '1':
                $actual_date['mon'] = 'Enero';
                break;
            case '2':
                $actual_date['mon'] = 'Febrero';
                break;
            case '3':
                $actual_date['mon'] = 'Marzo';
                break;
            case '4':
                $actual_date['mon'] = 'Abril';
                break;
            case '5':
                $actual_date['mon'] = 'Mayo';
                break;
            case '6':
                $actual_date['mon'] = 'Junio';
                break;
            case '7':
                $actual_date['mon'] = 'Julio';
                break;
            case '8':
                $actual_date['mon'] = 'Agosto';
                break;
            case '9':
                $actual_date['mon'] = 'Septiembre';
                break;
            case '10':
                $actual_date['mon'] = 'Octubre';
                break;
            case '11':
                $actual_date['mon'] = 'Noviembre';
                break;
            case '12':
                $actual_date['mon'] = 'Diciembre';
                break;
        }

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

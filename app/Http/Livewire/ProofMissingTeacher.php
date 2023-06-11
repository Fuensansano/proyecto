<?php

namespace App\Http\Livewire;

use App\Http\Requests\ProofMissingTeacherRequest;
use App\Traits\PDF;
use Livewire\Component;

class ProofMissingTeacher extends Component
{
    use PDF;

    public function render()
    {
        return view('livewire.proofMissingTeacher');
    }

    public function store(ProofMissingTeacherRequest $request)
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
            'name' => $request->name,
            'department' => $request->department,
            'dni' => $request->dni,

            'missingDay1' => $this->dateFormat($request->missingDay1),
            'journeyType1' => $request->journeyType1,
            'journeyStartTime1' => $request->journeyStartTime1,
            'journeyEndTime1' => $request->journeyEndTime1,

            'missingDay2' => $this->dateFormat($request->missingDay2),
            'journeyType2' => $request->journeyType2,
            'journeyStartTime2' => $request->journeyStartTime2,
            'journeyEndTime2' => $request->journeyEndTime2,

            'missingDay3' => $this->dateFormat($request->missingDay3),
            'journeyType3' => $request->journeyType3,
            'journeyStartTime3' => $request->journeyStartTime3,
            'journeyEndTime3' => $request->journeyEndTime3,

            'day' => $actual_date['mday'],
            'month' => $actual_date['mon'],
            'year' => $actual_date['year'],

            'permissionsSelect' => $request->permissionsSelect,
            'reason' => $request->reason,
            'anotherReason' => $request->anotherReason,
        ];

        return $this->generatePDF('pdfs.proofMissingTeacherPDF', 'justificante falta profesorado.pdf', $data);
    }

    public function dateFormat($date) {
        if($date == null) {
            return null;
        }

        return date('d-m-Y', strtotime($date));
    }
}

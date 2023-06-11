<?php

namespace App\Http\Livewire;

use App\Http\Requests\ExtracurricularActivityRequest;
use App\Traits\PDF;
use Livewire\Component;

class ExtracurricularActivity extends Component
{
    use PDF;

    public function render()
    {
        return view('livewire.extraescolaractivity');
    }

    public function store(ExtracurricularActivityRequest $request)
    {
        $data = [
            "activity_name" => $request->activity_name,
            "activity_place" => $request->activity_place,
            "activity_module" => $request->activity_module,
            "activity_departament" => $request->activity_departament,
            "teachers" => $request->teachers,
            "student_groups" => $request->student_groups,
            "date" => $request->date,
            "departure_time" => $request->departure_time,
            "arrive_time" => $request->arrive_time,
            "activity_price" => $request->activity_price,
            "transport" => $request->transport,
            "activity_responsible_teacher" => $request->activity_responsible_teacher,
            "observations" => $request->observations
            ];

        return $this->generatePDF('pdfs.extracurricularActivityPDF', 'informacion actividad extraescolar.pdf', $data);
    }
}

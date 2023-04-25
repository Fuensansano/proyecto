<?php

namespace App\Http\Livewire;

use App\Http\Requests\ExtraescolaractivityRequest;
use Dompdf\Dompdf;
use Dompdf\Options;
use Livewire\Component;

class ExtraescolarActivity extends Component
{
    public function render()
    {
        return view('livewire.extraescolaractivity');
    }

    public function store(ExtraescolaractivityRequest $request)
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
        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $html = view('pdfs.extraescolaractivityPDF', compact('data'))->render();

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->stream('ejemplo.pdf');
    }
}

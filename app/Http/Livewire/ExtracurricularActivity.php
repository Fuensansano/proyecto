<?php

namespace App\Http\Livewire;

use App\Http\Requests\ExtracurricularActivityRequest;
use Dompdf\Dompdf;
use Dompdf\Options;
use Livewire\Component;

class ExtracurricularActivity extends Component
{
    public function render()
    {
        return view('livewire.extraescolaractivity');
    }

    public function store(ExtracurricularActivityRequest $request)
    {
        $headerPath = public_path('/images/cabecerav6.png');
        $typeOfHeader = pathinfo($headerPath, PATHINFO_EXTENSION);
        $imageContent = file_get_contents($headerPath);
        $base64HeaderImage = 'data:image/' . $typeOfHeader . ';base64,' . base64_encode($imageContent);

        $data = [
            'header' => $base64HeaderImage,
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
        $options->set('isHtml5ParserEnabled', true);

        $html = view('pdfs.extracurricularActivityPDF', compact('data'))->render();

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->stream('informacion actividad extraescolar.pdf');
    }
}

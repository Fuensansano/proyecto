<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Requests\AutorizacionFamiliarRequest;

use Dompdf\Dompdf;
use Dompdf\Options;

class AutorizacionFamiliar extends Component
{
    public function render()
    {
        return view('livewire.autorizacionFamiliar');
    }

    public function generatePDF(AutorizacionFamiliarRequest $request) {
        $data = [
            'activity' => $request->activity,
            'organizer' => $request->organizer,
            'execution_date' => $request->execution_date,
            'departure_time' => $request->departure_time,
            'goals' => $request->goals,
            'deadline' => $request->deadline,
            'parents' => $request->parents,
            'student' => $request->student,
            'course' => $request->course,
            'authorization' => $request->authorization
        ];

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $html = view('pdfs.autorizacionFamiliarPDF', compact('data'))->render();

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->stream('autorizacionFamiliar.pdf');
    }
}

<?php

namespace App\Http\Livewire;

use App\Http\Requests\ProofMissingTeacherRequest;

use Livewire\Component;

use Dompdf\Dompdf;
use Dompdf\Options;

class ProofMissingTeacher extends Component
{
    public function render()
    {
        return view('livewire.proofMissingTeacher');
    }

    public function generatePDF(ProofMissingTeacherRequest $request)
    {
        date_default_timezone_set('Europe/Madrid');
        
        $fechaFormateada = date('d-m-Y', strtotime($request->missingDay1));

        $data = [
            'name' => $request->name,
            'department' => $request->department,
            'dni' => $request->dni,
            'missingDay1' => $fechaFormateada,
            'option1' => $request->option1,
            'midJourneyFrom1' => $request->midJourneyFrom1,
            'midJourneyTo1' => $request->midJourneyTo1,
        ];

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $html = view('pdfs.proofMissingTeacherPDF', compact('data'))->render();

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->stream('JustifcanteFaltaProfesorado.pdf', array('Attachment' => 0));
    }
}

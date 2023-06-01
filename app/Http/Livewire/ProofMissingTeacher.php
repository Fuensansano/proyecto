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

        $fecha_actual = getdate();

        switch ($fecha_actual['mon']) {
            case '1':
                $fecha_actual['mon'] = 'Enero';
                break;
            case '2':
                $fecha_actual['mon'] = 'Febrero';
                break;
            case '3':
                $fecha_actual['mon'] = 'Marzo';
                break;
            case '4':
                $fecha_actual['mon'] = 'Abril';
                break;
            case '5':
                $fecha_actual['mon'] = 'Mayo';
                break;
            case '6':
                $fecha_actual['mon'] = 'Junio';
                break;
            case '7':
                $fecha_actual['mon'] = 'Julio';
                break;
            case '8':
                $fecha_actual['mon'] = 'Agosto';
                break;
            case '9':
                $fecha_actual['mon'] = 'Septiembre';
                break;
            case '10':
                $fecha_actual['mon'] = 'Octubre';
                break;
            case '11':
                $fecha_actual['mon'] = 'Noviembre';
                break;
            case '12':
                $fecha_actual['mon'] = 'Diciembre';
                break;
        }

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

            'day' => $fecha_actual['mday'],
            'month' => $fecha_actual['mon'],
            'year' => $fecha_actual['year'],
            
            'permissionsSelect' => $request->permissionsSelect
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

    public function dateFormat($date) {
        return date('d-m-Y', strtotime($date));  
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Requests\FamilyAuthorizationRequest;

use Dompdf\Dompdf;
use Dompdf\Options;

class FamilyAuthorization extends Component
{
    public function render()
    {
        return view('livewire.familyAuthorization');
    }

    public function generatePDF(FamilyAuthorizationRequest $request)
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
            'activity' => $request->activity,
            'organizer' => $request->organizer,
            'execution_date' => $request->execution_date,
            'departure_time' => $request->departure_time,
            'goals' => $request->goals,
            'deadline' => $request->deadline,
            'parents' => $request->parents,
            'student' => $request->student,
            'course' => $request->course,
            'authorization' => $request->authorization,
            'dni' => $request->dni,
            'day' => $fecha_actual['mday'],
            'month' => $fecha_actual['mon'],
            'year' => $fecha_actual['year'],
        ];

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $html = view('pdfs.familyAuthorizationPDF', compact('data'))->render();

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->stream('autorizacionFamiliar.pdf', array('Attachment' => 0));
    }
}

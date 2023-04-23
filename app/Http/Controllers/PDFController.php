<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
class PDFController extends Controller
{
    public function generatePDF()
    {
        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $html = view('livewire.first-form')->render();

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->stream('ejemplo.pdf');
    }
}

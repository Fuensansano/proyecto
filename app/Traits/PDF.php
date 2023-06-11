<?php

namespace App\Traits;

use Dompdf\Dompdf;
use Dompdf\Options;

trait PDF
{
    public function generatePDF($pdfViewName, $downloadFileName, $data)
    {
        $headerPath = public_path('/images/cabecerav6.png');
        $typeOfHeader = pathinfo($headerPath, PATHINFO_EXTENSION);
        $imageContent = file_get_contents($headerPath);
        $base64HeaderImage = 'data:image/' . $typeOfHeader . ';base64,' . base64_encode($imageContent);
        $data['header'] = $base64HeaderImage;

        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        $html = view($pdfViewName, compact('data'))->render();

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->stream($downloadFileName);
    }
}

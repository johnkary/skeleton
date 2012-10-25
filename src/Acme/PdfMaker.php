<?php

namespace Acme;

use HTML2PDF;

class PdfMaker
{
    private $pdf;

    public function __construct(HTML2PDF $html2pdf)
    {
        $this->pdf = $html2pdf;
    }

    public function make($html, $filename)
    {
        $this->pdf->writeHTML($html, isset($_GET['vuehtml']));
        $this->pdf->Output($filename);
    }
}

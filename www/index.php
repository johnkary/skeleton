<?php

set_include_path('.'); // Remove default include_path so only using Composer include_path

require __DIR__ . '/../app/autoload.php';

ob_start();
include __DIR__ . '/../vendor/html2pdf/html2pdf-php5/examples/res/exemple00.php';


$html2pdf = new HTML2PDF('P', 'A4', 'fr');
$html2pdf->setDefaultFont('Arial');
// $html2pdf->setModeDebug();

$maker = new Acme\PdfMaker($html2pdf);

$html = ob_get_clean();
$maker->make($html, 'output.pdf');

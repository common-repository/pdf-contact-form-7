<?php

/* echo $file_1 = file_get_contents('https://api.moip.com.br/v2/boleto/BOL-RQY9LOQQ0SLQ/print');
 exit;*/
use Dompdf\Dompdf as Dompdf;
include_once('autoload.inc.php');

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml("fff");

// (Optional) Setup the paper size and orientation
//$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
//$dompdf->stream();
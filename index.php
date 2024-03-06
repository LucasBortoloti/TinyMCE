<?php

require __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

$dompdf->loadHtmlFile(__DIR__ . '/teste.html');

$dompdf->render();

header('Content-type: application/pdf');

echo $dompdf->output();

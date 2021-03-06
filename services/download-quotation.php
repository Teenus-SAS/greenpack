<?php
require_once dirname(__DIR__) . "/vendor/dompdf/autoload.inc.php";

use Dompdf\Dompdf;

$protocol = isset($_SERVER["HTTPS"]) ? "https" : "http";

$file = "$protocol://" . $_SERVER["HTTP_HOST"] . "/services/generate-quotation.php?id=" . $_GET["id"];
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $file
]);
$content = curl_exec($curl);
curl_close($curl);
$dompdf = new Dompdf(array('enable_remote' => true));
$dompdf->loadHtml($content, "UTF-8");
$dompdf->setPaper('letter');
$dompdf->render();
$pdf = $dompdf->output();
$dompdf->stream("cot-".bin2hex(openssl_random_pseudo_bytes(12)).".pdf");
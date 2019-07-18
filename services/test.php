<?php
require_once dirname(__DIR__) . "/vendor/autoload.php";

$file = "http://" . $_SERVER["HTTP_HOST"] . "/services/generate-quotation.php?id=" . $_GET["id"];
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $file
]);
$content = curl_exec($curl);
curl_close($curl);
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'letter']);
$mpdf->WriteHTML($content);
$pdf = $mpdf->Output('',\Mpdf\Output\Destination::STRING_RETURN);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cotizacion No. <?= $_GET["id"] ?></title>
</head>
<?php //header("Content-type:application/pdf");
//echo $pdf; ?>

<body>

</body>

</html>
<?php
/*
*Desarrollada por Teenus SAS
*/
require_once dirname(dirname(dirname(__DIR__))) . "/dao/ProductDao.php";
require_once dirname(dirname(dirname(__DIR__))) . "/model/product.php";
require_once dirname(dirname(dirname(__DIR__))) . "/model/Image.php";
require_once dirname(dirname(dirname(__DIR__))) . "/model/measurement.php";
require_once dirname(dirname(dirname(__DIR__))) . "/dao/CategoryDao.php";
require_once dirname(dirname(dirname(__DIR__))) . "/dao/MaterialDao.php";
require_once dirname(dirname(dirname(__DIR__))) . "/dao/CotizadorDao.php";

$categoryDao = new CategoryDao();
$productDao = new ProductDao();
$materialDao = new MaterialDao();
$cotizadorDao = new CotizadorDao();

$product = new Product();

if (isset($_POST)) {
  $ref = $_POST["ref"];
  $name = $_POST["title"];
  $description = $_POST["content"];
  $photos = json_decode($_POST["photos"]);
  //$uses = json_decode($_POST["uses"]);
  //$price = $_POST["price"];
  $product->setName($name);
  $product->setDescription($description);

  $images = [];
  foreach ($photos as $photo) {
    $image = new Image();
    $image->setUrl($photo);
    array_push($images, $image);
  }

/*   $materials = [];
  foreach (json_decode($_POST["materials"]) as  $materialId) {
    $material = $materialDao->findById((int) $materialId);
    array_push($materials, $material);
  } */

 /*  $measurements = [];
  foreach (json_decode($_POST["measurements"]) as  $measurementReq) {
    $measurement = new Measurement();
    $measurement->setWidth($measurementReq->width);
    $measurement->setHeight($measurementReq->height);
    $measurement->setLength($measurementReq->lenght);
    $measurement->setWindow($measurementReq->window);
    $measurement->setLargoUtil($measurementReq->largo_util);
    $measurement->setAnchoTotal($measurementReq->ancho_total);
    $measurement->setVentaMinimaImpresa($measurementReq->venta_minima_impresa);
    $measurement->setVentaMinimaGenerica($measurementReq->venta_minima_generica);
    array_push($measurements, $measurement);
  } */

  $product->setImages($images);
  //$product->setMaterials($materials);
  //$product->setMeasurements($measurements);
  $product->setCategory($categoryDao->findById($_POST["category"]));
  //$product->setUses($uses);
  $product->setRef($ref);
  //$product->setPrice($price);
  $product->setCotizador($_POST['cotizador']);

  if ($productDao->save($product) > 0) {
    echo "true";
  } else {
    http_response_code(400);
  }
} else {
  http_response_code(500);
}

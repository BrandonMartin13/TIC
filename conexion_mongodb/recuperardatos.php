<?php
require_once "crud.php";
$coleccion = "datos_epn";
$fechas = ["23-06-2023"];
$resultados = [];
$con = new Crud();
$datos = $con->mostrardatos($coleccion, $fechas);

foreach ($datos as $document) {
    echo "Device ID: " . $document->device_id 
    . ", Temperature: " . $document->temperature 
    . ", Humidity: " . $document->humidity 
    . ", Time: " . $document->time 
    . ", Date: " . $document->date;
}
//echo "Algo salio mal"
?>
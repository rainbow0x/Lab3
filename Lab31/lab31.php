<?php
$diametro = $_POST['diam'];
$altura = $_POST['altu'];
$radio = $diametro / 2;
$Pi = 3.1416;
$volumen = $Pi * $radio * $radio * $altura;

echo ("<br> El volumen del cilindro es: ") . $volumen . " metros cubicos";
?>
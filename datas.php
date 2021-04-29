<?php

date_default_timezone_set('America/Sao_Paulo');

echo date('d/m/Y') . '<br>';

$data =new DateTime();

var_dump($data);

echo  '<br>' . $data -> format('d-m-y') . '<br>'; echo  $data -> format('d-m-Y') . '<br>'; 
echo  '<br>' . $data -> format('d-m-y h:i:s') . '<br>'; echo  $data -> format('d-m-y H:i:s') . '<br>';

$intervalo = new Dateinterval('PT5M'); // adiciona um período de 5 minutos
$data -> add($intervalo);

var_dump($data); echo '<br>';

$intervalo2 = new Dateinterval('P3DT2H5M');
$data -> sub($intervalo2);

var_dump($data);

$data2 =new DateTime();
echo  '<br>' . $data2 -> format('d/m/Y - H:i:s') . '<br>';
$intervalo3 = new Dateinterval('P5DT10H50M');
$data2 -> sub($intervalo3);
var_dump($data2);
echo  '<br>' . $data2 -> format('d/m/Y - H:i:s') . '<br>';

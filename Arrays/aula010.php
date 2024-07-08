<?php

// ARRAYS - PT.2

$carros = array();
$carros[] = "FIAT";
$carros[] = "BMW";
$carros[] = "Volkswagen";
$carros[] = "Dodge";
$carros[] = "Toyota";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[] = "BMW";

$clientes = array();
$clientes[] = "Brayan";
$clientes[] = "Pedro";
$clientes[] = "João";

echo count($carros); # 5
echo count($motos); # 3
echo count($clientes); # 3

foreach($carros as $value){
    echo $valor . "<br>";
}
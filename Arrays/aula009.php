<?php

// ARRAYS - PT.1

$carros = array("BMW", "FIAT", "Ferrari");
print_r($carros);


// Imprimindo apenas um índice
echo $carros[1];

echo "<hr>";

// Adicionado índices
$carros[] = "Amarok";

echo "<hr>";

// Especificando índices
$carros[10] = "Camaro";
print_r($carros);


echo "<hr>";

// Outros modos de declaração

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[] = "Suzuki";


echo "<hr>";

$clientes = ["Brayan", "Pedro", "João"];



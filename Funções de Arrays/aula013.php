<?php

// FUNÇÕES DE ARRAYS - PT.2

// ARRAY_MERGE()
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos);

echo "<hr>";

// ARRAY_POP()
$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
array_pop($carros);

echo "<hr>";

// ARRAY_SHIFT()
print_r($carros);
array_shift($carros);

echo "<hr>";

// ARRAY_UNSHIFT()
$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
array_unshift( $frutas,"Manga", "Acerola", "Morango");


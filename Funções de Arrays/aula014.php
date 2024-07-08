<?php

// FUNÇÕES DE ARRAYS - PT.3

// ARRAY_PUSH()
$frutas = array("Uva", "Laranja", "Maçã");
array_push($frutas,"Manga", "Acerola", "Morango");

echo "<hr>";

// ARRAY_COMBINE()
$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Flamengo", "Fluminense", "Vasco");

$times = array_combine($keys, $values);
print_r($times);

echo "<hr>";

// ARRAY_SUN()
$numeros = array(2,4,6,7,8);
echo array_sum($numeros);

echo "<hr>";


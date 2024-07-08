<?php

// FUNÇÕES DE ARRAYS - PT.4

// EXPLODE()
$data = "02/07/2024";
$nova_data = explode('/', $data);
print_r($nova_data);

echo "<hr>";

// IMPLODE()
$nomes = array("Brayan", "Pedro", "João");
$string = implode(", ", $nomes);

echo $string;   
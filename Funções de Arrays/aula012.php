<?php

// FUNÇÕES DE ARRAYS - PT.1

// IS_ARRAY()
$nomes = array();
$nomes[] = "Brayan";
$nomes[] = "Lucas";
$nomes[] = "João";
if(is_array($nomes)){
    echo "É um Array";
}
else{
    echo "Não é um Array";
}

echo "<hr>";

// IN_ARRAY()

if(in_array("Rodrigo", $nomes)){
    echo "Nome encontrado com sucesso!";
}
else{
    echo "Nome não encontrado!";
}

echo "<hr>";

// ARRAY_KEY()

$keys = array_keys($nomes);

echo "<hr>";

// ARRAY_VALUES()
$values = array_values($nomes);

echo "<hr>";


<?php

// FUNÇÕES DE NÚMEROS

// NUMBER_FORMAT()
$db = 1234.56;
$preco = number_format($db, 2, ",",".");
echo "O valor do produto é R$ $preco";

echo "<hr>";

// ROUND()
echo round(3.6);

echo "<hr>";

// CEIL()
echo ceil(8.1);

echo "<hr>";

// FLOOR()
echo floor(8.90);

echo "<hr>";

// RAND()
echo rand(1,20);

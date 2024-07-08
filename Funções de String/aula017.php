<?php

// FUNÇÕES DE STRING - PT.2

// STR_REPEAT()
$string = str_repeat("Sucesso", 5);

echo "<hr>";

// STRLEN()
$mensagem = "Hello, World!";
echo strlen($mensagem);

echo "<hr>";

// STR_REPLACE()
$texto = "A seleção Argentina será campeã da Copa América 2024";
$novo_texto = str_replace("Argentina", "Brasileira", $texto);
echo $novo_texto;

echo "<hr>";

// STRPOS()
echo strpos($texto, "Copa");

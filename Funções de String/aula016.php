<?php 

// FUNÇÕES DE STRING - PT.1

// STRTOUPPER()
$nome = "brayan campos";
$novo_nome = strtoupper($nome);
echo $novo_nome;

echo "<hr>";

// STRTOLOWER()
$nome = "BRAYAN CAMPOS";
$novo_nome = strtolower($nome);
echo $novo_nome;

echo "<hr>";

// SUBSTR()
$mensagem = "Hello, World!";
echo substr($mensagem,7);

echo "<hr>";

// STR_PAD()
$objeto = "mouse";
$novo_objeto = str_pad($objeto, 10, "*", STR_PAD_LEFT);



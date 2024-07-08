<?php 

$nome = "Brayan Campos";

function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();

echo "<hr>";

function exibeCidade(){
    // ESCOPO LOCAL
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";

$a = 1;
$b = 3;
$c = 7;

function soma(){
   echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];

}

soma();


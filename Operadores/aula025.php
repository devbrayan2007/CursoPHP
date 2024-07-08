<?php

// OPERADORES LÓGICOS


// AND
$valor1 = TRUE;
$valor2 = TRUE;

if($valor1 and $valor2) {
    echo "Verdadeiro";
}
else{
    echo "Falso";
}

// OR

$valor1 = TRUE;
$valor2 = FALSE;

if($valor1 or $valor2) {
    echo "Verdadeiro";
}
else{
    echo "Falso";
}

// XOR

$valor1 = TRUE;
$valor2 = TRUE;

if($valor1 xor $valor2){
    echo "Verdadeiro";
}
else{
    echo "Falso";
}

// NOT (!)

$valor1 = TRUE;

if(!$valor1){
    echo "Verdadeiro";
}
else{
    echo "Falso";
}

// OPERADORE TERNÁRIO

$nota = 4;
$resultado = ($nota >= 7) ? ($resultado = "Aprovado") : ($resultado = "Reprovado");

<?php

// TIPOS DE DADOS

// ESCALARES
// INT
$num = 10;
var_dump( $num );

if(is_int($num)){
    echo "É Int";
}
else{
    echo "Não é Int";
}

echo "<br>";

// FLOAT
$num1 = 6.5;
var_dump( $num1 );

if(is_float($num1)){
    echo "É Float";
}
else{
    echo "Não é Float";
}

echo "<br>";

// STRING
$texto = "Isto é um texto";
var_dump( $texto );

if(is_string($texto)){
    echo "É uma String";
}
else{
    echo "Não é uma String";
}

echo "<br>";

// BOOLEAN
$true =  TRUE;
var_dump( $true );

echo "<br>";

if(is_bool($true)){
    echo "É Boolean";
}
else{
    echo "Não é Boolean";
}

// COMPOSTOS

// ARRAY
$carros = array("Camaro", "Mustang", "FIAT");
var_dump( $carros );
if(is_array($carros)){
    echo "É um Array";
}
else{
    echo "Não é um Array";
}

// OBJECT
class Cliente{
    public $nome;
    public function atribuirNome( $nome ){
        $this->$nome = $nome;

    }   
}

$cliente = new Cliente();
var_dump($cliente);


if(is_object($cliente)){
    echo "É um objeto";
}
else{
    echo "Não é um objeto";
}


echo "<hr>";

// ESPECIAIS

// NULL
$validar = NULL;
var_dump($validar);

if(is_null($validar)){
    echo "É NULL";
}
else{
    echo "Não é NULL";
}

// Resource


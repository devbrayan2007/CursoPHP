<?php


$string = "1";
$padrao = "/^[a-z0-9]{1,4}*?$/i";

if(preg_match($padrao, $string)){
    echo "Válido!";
    echo "<hr>";
    echo $string;
}
else{
    echo "Inválido!";
    echo "<hr>";
}
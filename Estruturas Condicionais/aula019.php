<?php

// ESTRUTURAS CONDICIONAIS - PT.1

$nota = 10;

if($nota >= 7){
    echo "APROVADO!";
}


// ELSE
if($nota >= 7){
    echo "APROVADO!";
}
else{
    echo "REPROVADO!";
}

// ELSEIF
if($nota >= 7){
    echo "APROVADO!";
}
elseif($nota >= 5 and $nota < 7){
    echo "RECUPERAÇÃO";
}
else{
    echo "REPROVADO!";
}
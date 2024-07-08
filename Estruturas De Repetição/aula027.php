<?php

// ESTRUTURAS DE REPETIÇÃO - PT.2

// FOR
for($i = 0; $i < 10; $i++){
    echo "O loop atual é: $i" . "<br>";
}

// FOREACH

$array = array(1,2,3,4,5);
foreach($array as $key){
        echo "O valor atual do array é $key";
}
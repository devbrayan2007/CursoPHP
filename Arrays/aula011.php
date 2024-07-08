<?php
// ARRAYS - PT.3

// ARRAYS ASSOCIATIVOS
$pessoa = array(
    "Nome" => "Brayan",
    "Idade" => 17,
    "Altura" => 1.81
);

echo $pessoa["Nome"];


echo "<hr>";

// Adicionando índices

$pessoa["Cidade"] = "Rio de Janeiro";

foreach($pessoa as $indice => $key){
    echo $indice.": ".$key."<br>";
}


echo "<hr>";

// Arrays Multidimensionais

$times = array(
    "Cariocas" => array("Campeão"=>"Flamengo","Vice"=>"Fluminense", "Terceiro"=>"Botafogo","Não se classificou"=>"Vasco"),
    "Paulistas" => array("Campeão"=>"São Paulo", "Vice"=>"Palmeiras", "Terceiro"=>"Corinthians", "Não se classficou"=>"Santos"),
    "Mineiros" => array("Campeão"=>"Atlético-MG", "Vice"=>"Cruzeiro", "Terceiro"=>"América-MG", "Não se classificou"=>"Tombense")
);

//echo $times["Paulistas"][0]; 


echo "<hr>";

foreach($times["Cariocas"] as $indice => $key){
    echo $indice.":".$key."<br>";
}

echo "<hr>";

foreach($times["Paulistas"] as $indice => $key){
    echo $indice. ":".$key."<br>";
}

echo "<hr>";

foreach($times["Mineiros"] as $indice => $key){
    echo $indice. ":".$key."<br>";
}

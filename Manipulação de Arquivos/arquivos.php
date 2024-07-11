<?php

$arquivo = 'arquivo.txt';

$arquivoAberto = fopen($arquivo,'r');
$tamanhoArquivo = filesize($arquivo);

$conteudo = "Teste\r\n";
//fwrite($arquivoAberto, $conteudo);


while(!feof($arquivoAberto)){
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha . "<br>";
}

fclose($arquivoAberto);

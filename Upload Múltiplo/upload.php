<?php

if(isset($_POST['enviar-formulario'])){
    $formatos = array();
    $formatos[] = "png";
    $formatos[] = "jpeg";
    $formatos[] = "jpg";
    $formatos[] = "gif";

    $quantidade_arquivos = count($_FILES['arquivo']['name']);
    $contador = 0;

    $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

    while($contador < $quantidade_arquivos){



    if (in_array($extensao,$formatos)){
        echo "Arquivo encontrado!" . "<br>";
        $pasta = "Arquivos/";
        $temp = $_FILES['arquivo']['tmp_name'][$contador];
        $novo_nome = uniqid(). ".$extensao";


    if(move_uploaded_file($temp, $pasta.$novo_nome)){
        echo "Upload feito com sucesso para $pasta.$novo_nome" . "<br>";
    }
    else{
       echo"ERRO! Não foi possível fazer o upload do arquivo $temp";
 }
    }
    else{
        echo "$extensao não é permitida!" . "<br>";
      }
      $contador++;
    }
}

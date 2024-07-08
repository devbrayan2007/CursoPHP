<?php


if(isset($_POST['enviar-formulario'])){
    $formatos = array();
    $formatos[] = "png";
    $formatos[] = "jpeg";
    $formatos[] = "jpg";
    $formatos[] = "gif";

    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatos)){
        echo "Existe!" . "<br>";
        $pasta = "Arquivos/";
        $temp = $_FILES['arquivo']['tmp_name'];
        $novo_nome = uniqid(). ".$extensao";

        if(move_uploaded_file($temp, $pasta.$novo_nome)){
            $mensagem = "Upload feito com sucesso!";
        }
        else{
            $mensagem = "ERRO! Não foi possível fazer upload desse arquivo!";
        }

    }
    else{
        $mensagem = "Formato inválido!";
    }
}

echo $mensagem;
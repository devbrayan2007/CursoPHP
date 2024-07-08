<?php


if(isset($_POST['enviar-formulario'])){
    $formatos_permitidos = array();
    $formatos_permitidos[] = "png";
    $formatos_permitidos[] = "jpeg";
    $formatos_permitidos[] = "jpg";
    $formatos_permitidos[] = "gif";

    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatos_permitidos)){
        echo "Existe" . "<br>";
        $pasta = "Arquivos/";
        $temp = $_FILES['arquivo']['tmp_name'];
        $novo_nome = uniqid().".$extensao";

        if(move_uploaded_file($temp, $pasta.$novo_nome)){
            $mensagem = "Upload feito com sucesso!";
        }
        else{
            $mensagem = "Erro! Não foi possível fazer o upload desse arquivo!";
        }
    }
    else{
        $mensagem = "Formato inválido!";

    }

    echo $mensagem;
}
<?php 

// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

if(isset($_POST['btn-deletar'])){
    $id = mysqli_escape_string($conexao, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";
    
    if(mysqli_query($conexao, $sql)){
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../index.php');
    }
    else{
        $_SESSION['mensagem'] = "Erro ao deletar!";
        header('Location: .../index.php');
    }
}

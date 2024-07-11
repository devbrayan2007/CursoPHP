<?php 

// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

if(isset($_POST['btn-editar'])){
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $idade = mysqli_escape_string($conexao, $_POST['idade']);
    $id = mysqli_escape_string($conexao, $_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";
    
    if(mysqli_query($conexao, $sql)){
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php');
    }
    else{
        $_SESSION['mensagem'] = "Erro ao atualizar";
        header('Location: .../index.php');
    }
}

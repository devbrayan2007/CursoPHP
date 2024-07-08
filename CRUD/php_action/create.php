<?php 

// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

if(isset($_POST['btn-cadastrar'])){
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $idade = mysqli_escape_string($conexao, $_POST['idade']);

    $sql = "INSERT INTO clientes(nome,sobrenome,email,idade)  VALUES ('$nome','$sobrenome','$email','$idade')";
    
    if(mysqli_query($conexao, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    }
    else{
        $_SESSION['mensagem'] = "Erro ao se cadastrar";
        header('Location: .../index.php');
    }
}

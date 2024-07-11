<?php 

// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

// Limpar

function clear($input){
    global $conexao;
    // comando sql
    $var = mysqli_escape_string($conexao, $input);
    // XSS
    $var = htmlspecialchars($var);
    return $var;

}

if(isset($_POST['btn-cadastrar'])){
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

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

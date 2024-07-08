<?php

// Conexão com Banco de Dados

$servidor = "localhost";
$usuario = "root";
$senha = "23012007";
$db_name = "crud";

// Conectando com o Banco de Dados

$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name);
mysqli_set_charset($conexao, "utf8");

// Verificando se existem ERROS na conexão
if(mysqli_connect_error()){
    echo "Erro ao se conectar com o banco de dados!" . mysqli_connect_error();
}



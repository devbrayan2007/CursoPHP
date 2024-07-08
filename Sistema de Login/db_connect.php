<?php

// Conexão com o BANCO DE DADOS 

$servidor = "localhost";
$usuario = "root";
$senha = "23012007";
$dbname = "sistema_login";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Verificando se tem algum erro na conexão

/*if(mysqli_connect_error()){
    echo "Falha na conexão" . mysqli_connect_error();
}
else{
    echo "Conexão bem-sucedida!";
}
*/
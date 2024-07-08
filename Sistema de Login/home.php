<?php 

// Conexão
require_once 'db_connect.php';

// Iniciando sessão
session_start();

// Dados

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($conexao);

// Verificação
if(!isset($_SESSION['logado'])){
    header('Location: index.php');
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restrita</title>
</head>
<body>
    <h2>Olá <?php echo $dados['nome']?></h2>
    <a href="logout.php">Sair</a>
</body>
</html>
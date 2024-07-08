<?php 
    // Conexão
    require_once 'db_connect.php';

    // Iniciando sessão
    session_start();

    // Verificando se o botão "Entrar" foi clicado
    if(isset($_POST['btn-entrar'])){
        $erros = array();
        $login = mysqli_escape_string($conexao, $_POST['login']);
        $senha = mysqli_escape_string($conexao, $_POST['senha']);
    }
    
    // Verificando se os campo foram enviados vazios
    if(empty($login) or empty($senha)){
        $erros[] = "<li>O campo login/senha precisa ser preenchido!</li>";
    }
    else{
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado) > 0){
            //$senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND '$senha'";
            $resultado = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado) == 1){
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($conexao);
                $_SESSION['logado'] = TRUE;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            }
            else{
                $erros[] = "<li>Usuário e senha não foram encontrados</li>";
            }
        }
        else{
            echo "Usuário não encontrado!";
        }
    }
    ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE LOGIN</title>
</head>
<body>
    <center>
    <h2>Login</h2>
    <hr>
    <?php 
    if(!empty($erros)){
        foreach($erros as $erro){
            echo $erro;
        }
    }
    
    
    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Login: <input type="text" name="login">
        <br>
        <br>
        Senha: <input type="password" name="senha">
        <br>
        <br>
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
    </center>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANITIZAÇÕES</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Nome: <input type="text" name="nome">
        <br>
        <br>
        Idade: <input type="text" name="idade">
        <br>
        <br>
        Email: <input type="text" name="email">
        <br>
        <br>
        URL: <input type="text" name="url">
        <br>
        <br>
        <button type="submit" name="envia-formulario">Enviar Dados</button>
    </form>

    <?php 
    if(isset($_POST['envia-formulario'])){
        $erros = array();
        echo "<br>";

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Nome: $nome" . "<br>";
        echo "<hr>";

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        if(!filter_var($idade, FILTER_VALIDATE_INT)){
            $erros[] = "A idade precisa um número inteiro";
        }
        echo "Idade:  $idade"  . "<br>";
        echo "<hr>";

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erros[] = "Insira um email válido!";
        }
        echo "Email: $email" . "<br>";
        echo "<hr>";

        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        if(!filter_var($url, FILTER_VALIDATE_URL)){
            $erros[] = "URL inválida!";

        }
        echo "URL: $url" . "<br>";
        echo "<br>";

        // Exibindo mensagens
        if(!empty($erros)){
            foreach($erros as $erro){
                echo "<li> $erro </li>";
            }
        }
        else{
            echo "Dados validados com sucesso!";
        }
    }
    
    ?>
</body>
</html>
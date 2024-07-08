<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDAÇÕES</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Idade: <input type="text" name="idade">
        <br>
        Email: <input type="text" name="email">
        <br>
        Peso: <input type="text" name="peso">
        <br>
        IP: <input type="text" name="ip">
        <br>
        URL: <input type="text" name="url">
        <br>
        <button type="submit" name="enviar-formulario">Enviar Dados</button>
    </form>
    <?php 
        if(isset($_POST['enviar-formulario'])){
            // Array de ERROS
            $erros = array();
            // VERIFICANDO A IDADE
            if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
                $erros[] = "Idade precisa ser um inteiro";
            }
            // VERIFICANDO O EMAIL
            if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
                $erros[] = "Insira um email válido";
            }
            // VERIFICANDO O PESO
            if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
                $erros[] = "Peso precisa ser um número flutuante";
            }
            // VERIFICANDO O IP
            if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
                $erros[] = "IP inválido!";
            }
            // VERIFICANDO A URL
            if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
                $erros[] = "URL inválida";
            }
            if(!empty($erros)){
                foreach($erros as $erro){
                    echo "<li> $erro </li>";
                }
            }
            else{
                // Mensagem de sucesso!
                echo "Dados validados com sucesso!";
            }
        }
    ?>
</body>
</html>
<?php
// Conexão
include_once 'php_action/db_connect.php';

// Header
include_once 'includs/header.php';

// Select
if(isset($_GET['id'])){
    $id = mysqli_escape_string($conexao, $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_array($resultado);

}
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Cliente</h3>
        <form action="php_action/update.php" method="post">
            <!--Campo Nome-->
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']?>">
                <label for="nome">Nome</label>
            </div>
            <!--Campo Sobrenome-->
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']?>">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <!--Campo Email-->
            <div class="input-field col s12">
                <input type="email" name="email" id="email" value="<?php echo $dados['email']?>">
                <label for="email">Email</label>
            </div>

            <!--Campo Idade-->
            <div class="input-field col s12">
                <input type="text" name="idade" id="idd" value="<?php echo $dados['idade']?>">
                <label for="idd">Idade</label>
            </div>

            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="index.php" type="submit" class="btn green">Lista de Clientes</a>
        </form>
    </div>
</div>


<?php
// Footer
include_once 'includs/footer.php';
?>

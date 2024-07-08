<?php
// Header
include_once 'includs/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Cliente</h3>
        <form action="php_action/create.php" method="post">
            <!--Campo Nome-->
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <!--Campo Sobrenome-->
            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>

            <!--Campo Email-->
            <div class="input-field col s12">
                <input type="email" name="email" id="email">
                <label for="email">Email</label>
            </div>

            <!--Campo Idade-->
            <div class="input-field col s12">
                <input type="text" name="idade" id="idd">
                <label for="idd">Idade</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="index.php" type="submit" class="btn green">Lista de Clientes</a>
        </form>
    </div>
</div>


<?php
// Footer
include_once 'includs/footer.php';
?>


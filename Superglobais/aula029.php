<?php 

// SUPERGLOBALS

//$GLOBALS
$x = 10;
$y = 15;

function somaNumeros(){
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

somaNumeros();

echo "<hr>";

// $_SERVER

# nome do arquivo
echo $_SERVER['PHP_SELF'] . "<br>";

# nome do servidor
echo $_SERVER['SERVER_NAME'] . "<br>";

# caminho absoluto do script
echo $_SERVER['SCRIPT_FILENAME'] . "<br>";

# diretório raiz do script
echo $_SERVER['DOCUMENT_ROOT'] . "<br>";

# porta do servidor
echo $_SERVER['SERVER_PORT'] . "<br>";

# nome do endereço IP
echo $_SERVER['REMOTE_ADDR'] . "<br>";

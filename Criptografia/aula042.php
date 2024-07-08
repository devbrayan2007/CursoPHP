<?php

$senha = "301221";
$senha_db = '$2y$10$KdInC.ZBl0h2lDdl/uFFfuykhKm0rCOd/15KysHHA3bKpZVvavW3a';
$options = [
    'cost' => 10
];
$senha_segura = password_hash($senha, PASSWORD_DEFAULT, $options);

echo $senha_segura;

echo "<br>";

if(password_verify($senha, $senha_db)){
    echo "Senha válida!";
}
else{
    echo "Senha inválida!";
}
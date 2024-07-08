<?php

// base64

$senha = "301221";

$nova_senha = base64_encode($senha);

echo $nova_senha;

echo "<br>";

echo "Sua senha é: " . base64_decode($nova_senha);

echo "<hr>";

// md5

echo md5($senha);

echo "<hr>";

// sha1

echo sha1($senha);
<?php

setcookie('user', 'Brayan Campos',  time()+3600);
setcookie('email', 'devbrayan2007@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);


echo $_COOKIE['user'];
echo "<br>";
echo $_COOKIE['email'];
echo "<br>";
echo $_COOKIE['ultima_pesquisa'];

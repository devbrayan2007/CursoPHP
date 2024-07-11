<?php

// Função DATE
date_default_timezone_set('America/Sao_Paulo');
echo date('d/M/Y H:i:s');
echo "<hr>";

// Armazenando datas no Banco de Dados

$date = date('Y-m-d'); // Formato DATE
$datetime = date('Y-m-d H:i:s'); // Formato DATETIME

echo $date;
echo "<br>";
echo $datetime;
echo "<hr>";

// Função TIME

echo time();
echo "<hr>";

// Função MKTIME

$data_pagamento = mktime(15,30,00,02,15,2025);
echo date('d/m/y - h:i',  $data_pagamento);

echo "<hr>";

// Função STRTOTIME
$data = '2019-04-10 13:30:00';
$data = strtotime($data);

echo date('d/m/Y', $data);
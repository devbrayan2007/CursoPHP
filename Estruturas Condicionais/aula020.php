<?php 

// ESTRUTURAS CONDICIONAIS - PT.2

// SWITCH

$cor = "Vermelho";

switch ($cor) {
    case "Vermelho":
        echo "Você prefere vermelho!";
        break;
    case "Verde":
        echo "Você prefere verde!!";
        break;
    case "Azul":
        echo "Você prefere azul!";
        break;
    case "Amarelo":
        echo "Você prefere amarelo!";
        break;
    default:
        echo "COR INVÁLIDA!";
}
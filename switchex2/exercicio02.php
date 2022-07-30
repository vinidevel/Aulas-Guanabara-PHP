<?php 

$diaDaSemana = isset($_GET["diaDaSemana"])?$_GET["diaDaSemana"]:["Não informado"];

switch ($diaDaSemana) {

    case 2:
    case 3:
    case 4:
    case 5:
    case 6: 
        echo "Levanta e vai estudar";
        break;
    case 7:
    case 8:
        echo "Fim de semana";
        break;
    default:
        echo "Dia da semana inválido";

}

?>
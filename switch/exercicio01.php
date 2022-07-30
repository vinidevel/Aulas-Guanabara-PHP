
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<title>Curso de PHP</title>

<?php

$numero = isset($_GET["numero"])?$_GET["numero"]:["não informado"];
$oper = isset($_GET["oper"])?$_GET[ "oper"]:[ "não informado"];

switch ($oper) {
    case 1:
        $resultado = $numero * 2;
        break;
    
    case 2:
        $resultado = $numero ^ 3;
        break;

    case 3:
        $resultado = sqrt($numero); //sqrt = raiz quadrada

}

echo "O resultado da operação solicitada foi <span class = 'foco' > $resultado </span>";
?>
<a href="index.html"> Voltar</a>
</html>
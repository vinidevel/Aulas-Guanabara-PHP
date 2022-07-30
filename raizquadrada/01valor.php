<?php

$valor = $_GET["v"];
$raizQuadrada = sqrt($valor); //sqrt é raiz quadrada 

echo "A raiz de $valor é igual a " . number_format($raizQuadrada, 2);
echo"<br/>";


?>

<html><a href="index.html">Voltar</a></html>
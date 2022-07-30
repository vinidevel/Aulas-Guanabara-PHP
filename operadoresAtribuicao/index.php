<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
   <?php
    $preco = $_GET["p"];
    echo"O preço do produto é" . number_format($preco, 2);
    $preco = $preco * 0.10; 
    echo "<br/> O desconto de 10% é igual a  " . number_format($preco, 2);
   ?>
</body>
</html>
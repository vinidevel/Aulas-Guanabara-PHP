<!DOCTYPE html>
<html>
    
    
    <head>
        <?php
        
        $texto = isset($_GET["t"])?$_GET["t"]:("Não foi preenchido");
        $tam = isset($_GET[ "tam"])?$_GET[ "tam"]:("12pt");
        $icor = isset($_GET[ "cor"])?$_GET["cor"]: ("#000000");
        ?>
        <link rel="stylesheet" href="style.css"/>
        <meta charset="utf-8"/>
        <title> Curso em video </title>
        <style>
            span.textoColorido {
                font-size: <?php echo $tam; ?>;
                color: <?php echo $icor; ?>;
            }
        </style>
    </head>

    <?php
    echo "<span class= 'textoColorido'> $texto </span>";
    ?>
    
</html>
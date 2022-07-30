
<?php 

date_default_timezone_set('America/Sao_Paulo');
$anoNascimento = isset($_GET["anoNascimento"])?$_GET["anoNascimento"]:[ "Não Informado"];
$nome = isset($_GET["nome"])?$_GET[ "nome"]:["Não informado"];
$anoAtual = date('Y');
$idade = $anoAtual - $anoNascimento;

if($idade >= 18){
    echo "$nome, você pode votar";
} else {
    echo "$nome, você não pode votar";
}
 
?>

<?php 
date_default_timezone_set('America/Sao_Paulo');
$nome = isset($_GET[ "nome"])?$_GET[ "nome"]:"[nao informado]";
$ano = isset($_GET[ "ano"])?$_GET[ "ano"]:"[ nao informado ]";
$sexo = isset($_GET[ "sexo"])?$_GET[ "sexo"]:"[nao informado]";

$idade = date('Y') - $ano;

echo "$nome tem $idade anos e é $sexo. <br/> ";



?>
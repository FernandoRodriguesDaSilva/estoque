<?php

require_once "../../classes/conexao.php";
require_once "../../classes/produtos.php";
//Botoão modal (eliminarProdutos.php) ativa essa página
$obj = new produtos();

$idpro = $_POST['idproduto'];

echo $obj->excluir($idpro);

?>
<?php 


require_once "../../classes/conexao.php";
require_once "../../classes/fornecedores.php";

$id = $_POST['idcliente'];

$obj = new fornecedores();
echo $obj->excluirFornecedores($id);

?>
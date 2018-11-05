<?php 

session_start();
require_once "../../classes/conexao.php";
require_once "../../classes/vendas.php";

$obj = new vendas();
// verifica se existe registro na sessão tabelaComprasTemp
if(count($_SESSION['tabelaComprasTemp']) == 0){
	echo 0;
} else { // Se não executa a função criarVenda()
	$result = $obj->criarVenda();
	unset($_SESSION['tabelaComprasTemp']);
	echo $result;
}
?>


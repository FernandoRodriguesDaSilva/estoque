<?php 

session_start();
// retorna ajax da tabela vendaDeProdutos
$index = $_POST['nao_finalizado'];
// retirar da tabelaCompraTemp a variavel anterior
unset($_SESSION['tabelaComprasTemp'][$index]);
// A variavel dados vai receber os novos valores
$dados = array_values($_SESSION['tabelaComprasTemp']);
// E encerrar a sessão tabelaComprasTemp
unset($_SESSION['tabelaComprasTemp']);
$_SESSION['tabelaComprasTemp'] = $dados;

?>
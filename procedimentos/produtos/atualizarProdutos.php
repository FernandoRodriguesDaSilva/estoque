<?php 

	require_once "../../classes/conexao.php";
	require_once "../../classes/produtos.php";
//Botoão modal (atualizarProdutos.php) ativa essa página
	$obj= new produtos();
// <!-- Recupera os dados no banco  -->
$dados = array(

		$_POST['idProduto'],
	    $_POST['categoriaSelectU'],
	    $_POST['nomeU'],
	    $_POST['descricaoU'],
	    $_POST['quantidadeU'],
	    $_POST['precoU']
			);

    echo $obj->atualizar($dados);

 ?>
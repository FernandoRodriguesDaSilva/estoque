<?php 
require_once "../../classes/conexao.php";
require_once "../../classes/vendas.php";

$objv = new vendas();

$c = new conectar();
$conexao = $c->conexao();
	// Recebe o id_venda pelo metodo get
$idvenda = $_GET['idvenda'];
// seleciona os campos abaixo
$sql = "SELECT ve.id_venda,
ve.dataCompra,
ve.id_cliente,
pro.nome,
pro.preco,
pro.descricao
from vendas  as ve 
inner join produtos as pro
	-- ligação entre as tabela e feita entre o id_produto e id_venda
	on ve.id_produto=pro.id_produto
	and ve.id_venda='$idvenda'";

	$result = mysqli_query($conexao,$sql);
	$ver = mysqli_fetch_row($result);
// variavel comp recebe o primeiro indice da busca que é id_venda
	$comp=$ver[0];
	// data recebe o segundo indice DataCompra
	$data=$ver[1];
	// idcliente recebe o terceiro indice id_cliente
	$idcliente=$ver[2];

	?>	
	<style type="text/css">
	
	@page {
		margin-top: 0.3em;
		margin-left: 0.6em;
	}
	body{
		font-size: xx-small;
	}
</style>
<p>Vendas</p>
<p>
	Data: 
	<?php echo date("d/m/Y", strtotime($data)) ?>
</p>
<p>
	Comprovante: <?php echo $comp ?>
</p>
<p>
	Cliente: <?php echo $objv->nomeCliente($idcliente); ?>
</p>
<!-- Exibindo os dados do banco da tabela vendas -->
<table style="border-collapse: collapse;" border="1" width="145px">
	<tr>
		<td>Nome</td>
		<td>Preco</td>
		<td>Quantidade</td>
	</tr>
	<?php 
	$sql="SELECT ve.id_venda,
	ve.dataCompra,
	ve.id_cliente,
	pro.nome,
	pro.preco,
	pro.descricao,
	ve.quantidade,
	ve.total_venda
	from vendas  as ve 
	inner join produtos as pro
	on ve.id_produto=pro.id_produto
	and ve.id_venda='$idvenda'";

	$result=mysqli_query($conexao,$sql);
	$total=0;
	while($mostrar=mysqli_fetch_row($result)){
		?>
		<tr>
			<td><?php echo $mostrar[3]; ?></td>
			<td><?php echo "R$ ".$mostrar[4].",00" ?></td>
			<td><?php echo $mostrar[6]; ?></td>
		</tr>
		<?php
		$total=$total + $mostrar[7];
	} 
	?>
	<tr>
		<td colspan="3">Total: <?php echo "R$ ".$total.",00" ?></td>
	</tr>
</table>



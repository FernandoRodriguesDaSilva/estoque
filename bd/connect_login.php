<?php
require_once "classes/conexao.php";
$obj = new conectar();
$conexao = $obj->conexao();

$sql = "SELECT * from usuarios where email='admin'";
$result = mysqli_query($conexao, $sql);

$validar = 0;
if(mysqli_num_rows($result) > 0){
	$validar = 1;
}

?>
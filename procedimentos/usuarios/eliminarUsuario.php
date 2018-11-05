<?php 

require_once ("../../classes/conexao.php");
require_once("../../classes/usuarios.php"); 

//Tranforma a class usuario em objeto para excluir

$obj = new usuarios;

echo ($obj->excluir($_POST['idusuario']));

?> 
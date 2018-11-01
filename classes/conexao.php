<?php 

class conectar{
	private $servidor = "localhost";
	private $usuario = "root";
	private $senha = "root";
	private $bd = "sistema";

	public function conexao(){
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);

		return $conexao;
	}
}

 ?>
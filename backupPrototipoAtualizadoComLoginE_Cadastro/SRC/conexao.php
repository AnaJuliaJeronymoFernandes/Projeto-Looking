<?php
	function getConexao() {
		$host = "localhost";
		$usuario = "matheus";
		$senha = "123";
		$bd = "ifsp";
		$conexao = mysqli_connect($host, $usuario, $senha, $bd);
		mysqli_set_charset($conexao, "utf8");
		return $conexao;
	}
?>
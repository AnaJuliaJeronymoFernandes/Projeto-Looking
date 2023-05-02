<?php
	function getConexao() {
		$host = "localhost";
		$usuario = "root";//matheus
		$senha = "usbw";//123
		$bd = "ifsp";
		$conexao = mysqli_connect($host, $usuario, $senha, $bd);
		mysqli_set_charset($conexao, "utf8");
		return $conexao;
	}

	// function insert($ImgDestino){
	// 	$conexao = getConexao();
	// 	$sql = "INSERT INTO Usuario(CaminhoImg)
	// 	VALUES ('$ImgDestino')";
	// 	mysqli_query($conexao, $sql);
	// 	mysqli_close($conexao);
	// }
?>
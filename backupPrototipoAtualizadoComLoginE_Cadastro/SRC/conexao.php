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

	// function readTeste(){
	// 	$conexao = getConexao();
	// 	$sql = "SELECT id, caminho_img from teste";
	// 	$result = mysqli_query($conexao,$sql);
	// 	$linhas = array();
	
	// 	while($row = mysqli_fetch_assoc($result)){
	// 		array_push($linhas, $row);
	// 	}
	
	// 	mysqli_close($conexao);
	
	// 	return $linhas;
	// }
?>
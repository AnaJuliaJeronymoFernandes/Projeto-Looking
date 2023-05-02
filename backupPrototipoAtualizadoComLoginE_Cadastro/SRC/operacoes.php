<?php

	//loja, imagem e genero ainda nao
	function cadastrar_usuario($conexao, $nome, $sobrenome, $cpf, $cidade, $tel, $email, $senha, $nascimento, $ImgDestino, $camiseta, $calca, $calcado){
		$comandoSql = "insert into usuario (CPF, Nome, Sobrenome, Cidade, Senha, Telefone, Email, Nascimento, CaminhoImg) values (?,?,?,?,?,?,?,?,?)";
	
		$stmt = mysqli_prepare($conexao, $comandoSql); 
	
		mysqli_stmt_bind_param($stmt,"sssssssss", $cpf, $nome, $sobrenome, $cidade, $senha, $tel, $email, $nascimento, $ImgDestino); 

		$resultadoInsercao = mysqli_stmt_execute($stmt);
		
		mysqli_stmt_close($stmt);
		mysqli_close($conexao);

		return $resultadoInsercao;	
	}

	function readImg(){
		$conexao = getConexao();
		$sql = "SELECT CaminhoImg from Usuario";
		$result = mysqli_query($conexao, $sql);
		// $linhas = array();
	
		// while($row = mysqli_fetch_assoc($result)){
		// 	array_push($linhas, $row);
		// }
	
		mysqli_close($conexao);
	
		return $result;
	}
?>

<?php

	//loja, imagem e genero ainda nao
	function cadastrar_usuario($conexao, $nascimento,  $camiseta, $calca, $calcado, $nome, $sobrenome, $cpf, $cidade, $tel, $email, $senha) {
		$comandoSql = "insert into usuario (CPF, Nome, Sobrenome, Cidade, Senha, Telefone, Email, Nascimento) values (?,?,?,?,?,?,?,?)";
	
		$stmt = mysqli_prepare($conexao,$comandoSql); 
	
		mysqli_stmt_bind_param($stmt,"ssssssss", $cpf, $nome, $sobrenome, $cidade, $senha, $tel, $email, $nascimento); 

		$resultadoInsercao = mysqli_stmt_execute($stmt);
		
		mysqli_stmt_close($stmt);
		mysqli_close($conexao);

		return $resultadoInsercao;	
	}

	
?>

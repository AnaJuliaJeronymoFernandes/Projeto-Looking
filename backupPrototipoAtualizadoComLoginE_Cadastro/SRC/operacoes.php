<?php
	 require("conexao.php");
	 require("operacoes.php");

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
		$sql = "SELECT CaminhoImg from Usuario WHERE CPF = cpf";

		if(!isset($_SESSION["cpf"])) {
			session_start();
		}

		$result = mysqli_query($conexao, $sql);
		$linhasImg = array("cpf");
	
		while($row = mysqli_fetch_assoc($result)){
		 	array_push($linhasImg, $row);
		}
	
		mysqli_close($conexao);
	
		return $result;
	}
?>

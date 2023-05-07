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

	function readImg($linhaImg){
		$conexao = getConexao();
		
		if(!isset($_SESSION["cpf"])) {
			session_start();
		}

		$stmt = $conexao->prepare("SELECT CaminhoImg from Usuario WHERE CPF = cpf");
		$stmt -> bind_param('cpf', $cpf);
		$stmt -> execute();
		$resultado = $stmt -> fetch();

		$linhaImg = $resultado['CaminhoImg'];
		echo "<img src= '.$linhaImg.'></img>";

		return $linhaImg;

	}

	function buscarPeca($palavrachave, $caminhopeca, $donopeca, $fotodono, $tecido, $tamanho){
		$conexao = getConexao();
		$palavrachave = $_POST["pesquisar"];
		$sql = "SELECT caminhopeca FROM Peca WHERE palavrachave = $palavrachave";
		$sqldono = "SELECT donopeca FROM Peca WHERE palavrachave = $palavrachave";
		$sqlfotodono = "SELECT imagemdonopeca FROM Peca WHERE palavrachave = $palavrachave";
		$sqltecido = "SELECT tecido FROM Peca WHERE palavrachave = $palavrachave";
		$sqltamanho = "SELECT tamanho FROM Peca WHERE palavrachave = $palavrachave";


		$resultado = mysqli_query($conexao, $sql);

		if($resultado == $palavrachave){
			$caminhopeca = $sql;
			$donopeca = $sqldono;
			$fotodono = $sqlfotodono;
			$tecido = $sqltecido;
			$tamanho = $sqltamanho;

			header("Location: resultadobusca.php");
		}else{
			echo "Não há resultados para '.$palavrachave.', tente outra palavra chave.";

		}
		
		mysqli_close($conexao);
		// return $resultado;
	}
?>

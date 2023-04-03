<?php

	$email = $_POST["email"];
    $senha = $_POST["senha"];

	if(!empty(trim($email)) && !empty(trim($senha))) {

		require "conexao.php";

		$conexao = getConexao();

		if($conexao) { 
		
            $sql = "select * from Usuario where Email=? and Senha=?";
            
			$stmt = mysqli_prepare($conexao, $sql);

			mysqli_stmt_bind_param($stmt, "ss", $email, $senha);

			mysqli_stmt_execute($stmt);

            $resultado = mysqli_stmt_get_result($stmt);

			if($resultado) {
				if(mysqli_num_rows($resultado) == 1) {
                    //é criado um array que armazena os dados do usuario consultado
					$usuario = mysqli_fetch_assoc($resultado);
                    //armazenamos os dados que queremos do array em variáveis 
					$cpf_usuario = $usuario["CPF"];
					$nome_usuario = $usuario["Nome"];
					$sobrenome_usuario = $usuario["Sobrenome"];
					$cidade_usuario = $usuario["Cidade"];
					$telefone_usuario = $usuario["Telefone"];
					$email_usuario = $usuario["Email"];
                    $nascimento_usuario = $usuario["Nascimento"];
                    //nao pegamos senha pq tá criptografada
                    
                    //Depois passamos os dados das variaveis pra variável de sessão
					session_start(); //usamos sessão porque o http não guarda estado
					$_SESSION["cpf"] = $cpf_usuario;
					$_SESSION["nome"] = $nome_usuario;
                    $_SESSION["sobrenome"] = $sobrenome_usuario;
					$_SESSION["cidade"] = $cidade_usuario;
                    $_SESSION["telefone"] = $telefone_usuario;
					$_SESSION["email"] = $email_usuario;
                    $_SESSION["nascimento"] = $nascimento_usuario;
                    
                    //Redirecionamos pra página protegida pós-login
					mysqli_free_result($resultado);
					mysqli_stmt_close($stmt);
					mysqli_close($conexao);
					header("location: ../inicio.php");
				}
				else {
					mysqli_free_result($resultado);
					mysqli_stmt_close($stmt);
					mysqli_close($conexao);
					header("location: ../erro.html");
				}
			}
			//$resultado nao existe a partir daqui
			else {
				mysqli_stmt_close($stmt);
				mysqli_close($conexao);
				echo "Problema na comunicação com o BD: " . mysqli_error($conexao);
			}
        }
		//$conexao, $stmt n existem a partir daqui
        else {
			echo "Problema na conexão: " . mysqli_connect_error(); //da ultima tentativa de conexao com bd
		}
	}
	else {
		header("location: ../erro.html");
	}
?>
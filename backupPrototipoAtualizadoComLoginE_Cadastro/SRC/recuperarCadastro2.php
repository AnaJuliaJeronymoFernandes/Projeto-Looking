<?php

    include upload.php;

    if(!isset($_SESSION["CPF"])) {
        session_start();
    }
    
    require "conexao.php";
	require "operacoes.php";
            
    //dados do cadastro1.php
    $Nascimento = $_POST["Nascimento"];
    //$genero = $_POST["genero"];
    //$imgpreview = $_POST["imgpreview"];
    $Camiseta = $_POST["Camiseta"];
    $Calca = $_POST["Calca"];
    $Calcado = $_POST["Calcado"];
    //$loja = $_POST["loja"];


    if(!empty(trim($Nascimento)) && !empty(trim($Camiseta)) && !empty(trim($Calca)) && !empty(trim($Calcado))){

        $conexao = getConexao();
		
		if($conexao){

            //dados do cadastro2.php
            $Nome = $_SESSION["Nome"];
            $Sobrenome = $_SESSION["Sobrenome"];
            $CPF = $_SESSION["CPF"];
            $Cidade = $_SESSION["Cidade"];
            $Telefone = $_SESSION["Telefone"];
            $Email = $_SESSION["Email"];
            $Senha = $_SESSION["Senha"];

			$cadastro = cadastrar_usuario($conexao, $Nascimento,  $Camiseta, $Calca, $Calcado, $Nome, $Sobrenome, $CPF, $Cidade, $Telefone, $Email, $Senha);
			if($cadastro){
				$destino = "header('location: ../sucesso.html')";
			}else{
				$destino = "header('location: erro.php')";
                $problema = "problema ao inserir no bd";
			}
		}else{
			$erroConexao = mysqli_connect_error($conexao);
            $problema = "Houve um erro na conexão do php com o banco de dados: " . $erroConexao;
		}
	}else{
		$destino = "header('location: erro.php')";
	}
    session_start();
    echo $destino;
?>
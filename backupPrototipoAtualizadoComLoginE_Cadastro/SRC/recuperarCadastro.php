<?php
    if(!isset($_SESSION["cpf"])) {
        session_start();
    }

    require("conexao.php");
    require("operacoes.php");

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $cidade = $_POST["cidade"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];


    if(!empty($nome) && !empty($sobrenome) && !empty($cpf) && !empty($cidade) && !empty($tel) && !empty($email) && !empty($senha)){

        $conexao = getConexao();

        if($conexao){
            $_SESSION["nome"] = $nome;
            $_SESSION["sobrenome"] = $sobrenome;
            $_SESSION["cpf"] = $cpf;
            $_SESSION["cidade"] = $cidade;
            $_SESSION["tel"] = $tel;
            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $senha;

            $cadastro1 = cadastrar_usuario($conexao, $nome, $sobrenome, $cpf, $cidade, $tel, $email, $senha, $nascimento, $ImgDestino, $camiseta, $calca, $calcado);
        }
        

        header("location: cadastro2.php");

    }else{
        header("location: erro.php");
    }
?>
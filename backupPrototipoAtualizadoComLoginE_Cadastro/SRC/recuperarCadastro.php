<?php

/* session_start();
if(!isset($_SESSION["cpf"])) {
    header("location: ../public/index.html");
    die();
} */

/* if(session!=null){
} */
    
    if(!isset($_SESSION["cpf"])) {
        session_start();
    }

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $cidade = $_POST["cidade"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];


    if(!empty(trim($nome)) && !empty(trim($sobrenome)) && !empty(trim($cpf)) && !empty(trim($cidade)) && !empty(trim($tel)) && !empty(trim($email)) && !empty(trim($senha))){

        $_SESSION["nome"] = $_POST["nome"];
        $_SESSION["sobrenome"] = $_POST["sobrenome"];
        $_SESSION["cpf"] = $_POST["cpf"];
        $_SESSION["cidade"] = $_POST["cidade"];
        $_SESSION["tel"] = $_POST["tel"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["senha"] = $_POST["senha"];

        header("location: cadastro2.php");

    }else{
        header("location: erro.php");
    }
?>
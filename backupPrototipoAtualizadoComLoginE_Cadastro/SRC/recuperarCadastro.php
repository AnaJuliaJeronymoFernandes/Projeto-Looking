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

    $Nome = $_POST["Nome"];
    $Sobrenome = $_POST["Sobrenome"];
    $CPF = $_POST["CPF"];
    $Cidade = $_POST["Cidade"];
    $Telefone = $_POST["Telefone"];
    $Email = $_POST["Email"];
    $Senha = $_POST["Senha"];


    if(!empty(trim($Nome)) && !empty(trim($Sobrenome)) && !empty(trim($CPF)) && !empty(trim($Cidade)) && !empty(trim($Telefone)) && !empty(trim($Email)) && !empty(trim($Senha))){

        $_SESSION["Nome"] = $_POST["Nome"];
        $_SESSION["Sobrenome"] = $_POST["Sobrenome"];
        $_SESSION["CPF"] = $_POST["CPF"];
        $_SESSION["Cidade"] = $_POST["Cidade"];
        $_SESSION["Telefone"] = $_POST["Telefone"];
        $_SESSION["Email"] = $_POST["Email"];
        $_SESSION["Senha"] = $_POST["Senha"];

        header("location: cadastro2.php");

    }else{
        header("location: erro.php");
    }
?>
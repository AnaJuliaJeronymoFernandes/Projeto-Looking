<?php
    if(!isset($_SESSION["cpf"])) {
        session_start();
    }

    require("conexao.php");
    require("operacoes.php");
    
    $nascimento = $_POST["nascimento"];
    $camiseta = $_POST["camiseta"];
    $calca = $_POST["calca"];
    $calcado = $_POST["calcado"];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        if(isset($_FILES["imgpreview"])){
            $img = $_FILES["imgpreview"];
            $img_nome = $img["name"];
            $img_tmp = $img["tmp_name"];
            $img_ext = $img["type"];
            $img_erro = $img["error"];
        }

        if($img_erro == UPLOAD_ERR_OK){
             $ImgDestino = "../uploads/".time().".jpg";
             move_uploaded_file($img_tmp, $ImgDestino);
             cadastrar_usuario($conexao, $nome, $sobrenome, $cpf, $cidade, $tel, $email, $senha, $nascimento, $ImgDestino, $camiseta, $calca, $calcado);
            //insert($ImgDestino);
        }
    }
    
    if(!empty($nascimento)  && !empty($ImgDestino) && !empty($camiseta) && !empty($calca) && !empty($calcado)){

        $conexao = getConexao();
		
		if($conexao){

            //dados do cadastro.php
            $nome = $_SESSION["nome"];
            $sobrenome = $_SESSION["sobrenome"];
            $cpf = $_SESSION["cpf"];
            $cidade = $_SESSION["cidade"];
            $tel = $_SESSION["tel"];
            $email = $_SESSION["email"];
            $senha = $_SESSION["senha"];

            //dados do cadastro2.php
            $_SESSION["nascimento"] = $nascimento;
            $_SESSION["ImgDestino"] = $ImgDestino;
            $_SESSION["camiseta"] = $camiseta;
            $_SESSION["calca"] = $calca;
            $_SESSION["calcado"] = $calcado;


			$cadastro2 = cadastrar_usuario($conexao, $nome, $sobrenome, $cpf, $cidade, $tel, $email, $senha, $nascimento, $ImgDestino, $camiseta, $calca, $calcado);
			if($cadastro2){
				header("location: sucesso.php");
			}else{
				header("location: erro.php");
			}
		}else{
			$erroConexao = mysqli_connect_error();
			echo "Houve um erro na conexão do php com o banco de dados: " . $erroConexao;
		}
	}else{
		header("location: erro.php");
	}
?>
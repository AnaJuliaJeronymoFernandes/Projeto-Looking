<?php
    if(!isset($_SESSION["cpf"])) {
        session_start();
    }

    require("conexao.php");
    require("operacoes.php");
    
    //dados do cadastro2.php
    $nascimento = $_POST["nascimento"];
    //$genero = $_POST["genero"];
    //$imgpreview = $_POST["imgpreview"];
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
             insert($ImgDestino);
        }
    }
    

    //
    if(!empty($nascimento)  && !empty($camiseta) && !empty($calca) && !empty($calcado)){

        $conexao = getConexao();
		
		if($conexao){

            //dados do cadastro2.php
            $nome = $_SESSION["nome"];
            $sobrenome = $_SESSION["sobrenome"];
            $cpf = $_SESSION["cpf"];
            $cidade = $_SESSION["cidade"];
            $tel = $_SESSION["tel"];
            $email = $_SESSION["email"];
            $senha = $_SESSION["senha"];
            $ImgDestino = $_SESSION["ImgDestino"];


			$cadastro = cadastrar_usuario($conexao, $nascimento, $camiseta, $calca, $calcado, $nome, $sobrenome, $cpf, $cidade, $tel, $email, $senha, $ImgDestino);//colocar nascimento também
			if($cadastro){
				header("location: sucesso.php");
			}else{
				header("location: erro.php");
			}
		}else{
			$erroConexao = mysqli_connect_error($conexao);
			echo "Houve um erro na conexão do php com o banco de dados: " . $erroConexao;
		}
	}else{
		header("location: erro.php");
	}
?>
<?php

    if(isset($_POST['enviar'])) {
        if(! empty($_FILES['arquivo']['name'])){

            $nomeArquivo = $_FILES['arquivo']['name'];
            $tipo = $_FILES['arquivo']['type']; 
            $nomeTemporario = $_FILES['arquivo']['tmp_name'];
            $tamanho = $_FILES['arquivo']['size'];
            $erros=array();

            

            $tamanhoMaximo = 1024 * 1024 * 5;
            if($tamanho > $tamanhoMaximo) {
                $erros[] ="Seu arquivo excede o tamanho máximo" ; 
            }
             $arquivosPermitidos = ["png", "jpg", "jpeg"];
            $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
             
            if(! in_array($tipo, $arquivosPermitidos)){
                 $erros[] ="Arquivo não permitido" ; 
             }

            $typePermitidos = ["image/png", "image/jpg", "image/jpeg"];
            if (!in_array($tipo, $typePermitidos)){
                $erros[] = "Arquivo não permitido.";   

            }

        }

        if(!empty($erros)){
            foreach ($erros as $erro){
                echo $erro;

        }
    }else{
        $caminho = "../uploads/";
        $hoje = date("d-m-Y_h-i");
        $novoNome = $hoje."-".$nomeArquivo;

        if(move_uploaded_file($nomeTemporario, $caminho.$novoNome)){
            echo "Upload feito com sucesso!";
        }else{
            echo"Erro ao enviar o arquivo de imagem";
        }
    }
}

?>
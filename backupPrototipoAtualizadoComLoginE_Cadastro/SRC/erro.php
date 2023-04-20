<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
    <title>Cadastrado com sucesso!</title>
</head>
<body>
    <div>
    <?php
        include("../include/cabecalho.php");
    ?>

    <main class="cadastro">
        <div class="containercad">
            <div class="formcadastro">
                <form class="form">
                    <div class="form-header">
                        <h1 class="cadastroh2">Cadastro/Login</h1>
                    </div>

                    <div class="concluido">
                    <!--
                    <img src="assets/img/verify-unscreen.gif" class="imgconcluido" alt="Ok">
                    -->
                    <p>
                        Algum dado foi inserido incorretamente, ou há campos vazios, ou o cadastro/login não teve sucesso
                    </p>
                    </div>

                    <div class="continue-button-cad2">
                        <a href="../public/index.php">Voltar</a>
                    </div>
                </form>
            </div>
            <div class="form-image">
                <img src="../assets/img/medindo.svg" alt="ilustração">
            </div>
        </div>
    </main>
    
    <?php
        include("../include/rodape.php");
    ?>
    </div>
    <script src="../assets/js/script.js"></script>
</body>
</html>
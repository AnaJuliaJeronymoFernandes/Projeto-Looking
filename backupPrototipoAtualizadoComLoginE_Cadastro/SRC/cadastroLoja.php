<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
    <title>Cadastro</title>
</head>
        <?php
            include("../include/cabecalho.php");
        ?>
<body>
    <div>
    <main class="cadastroloja">
        <div class="containercad">
            <div class="formcadastro">
                <form class="form" method="POST" action="recuperarCadastro.php">
                    <div class="form-header">
                        <h1 class="cadastroh1">Cadastre sua Loja</h1>
                    <div class="login-buttn">
                        <a href="inicio.php">Inicio</a>
                    </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                           <label for="nomeLoja">nome da Loja</label>
                           <input type="text" id="nomeLoja" name="NomeLoja" placeholder="Digite o nome da sua loja"/>
                        </div>

                        <div class="input-box">
                            <label for="endereco">Endereço</label>
                            <input type="text" id="endereco" name="endereco" placeholder="Digite o endereço da loja"/>
                        </div>

                        <div class="input-box">
                            <label for="cnpj">CNPJ</label>
                            <input type="number" id="cnpj" name="cnpj" placeholder="99.999.999/9999-99" min="0"/>
                        </div>

                        <div class="input-box">
                            <label for="nomeDono">Nome do Dono</label>
                            <input type="text" id="nomeDono" name="nomeDono" placeholder="Digite o nome do dono" min="0"/>
                        </div>

                        <div class="input-box">
                            <label for="telLoja">Telefone da Loja</label>
                            <input type="number" id="telLoja" name="TelLoja" placeholder="(99) 9999-9999" min="0"/>
                        </div>
                        
                        <div class="input-box">
                            <label for="emailLoja">E-mail da Loja</label>
                            <input type="emailLoja" id="emailLoja" name="EmailLoja" placeholder="joao@email.com"/>
                        </div>         
                    </div>

                    <div class="continue-button-peca">
                        <button type="submit">Cadastrar</button>
                        <!-- <button><a href="cadastro2.php">Continuar</a></button> -->
                    </div>
                </form>
            </div>
            <div class="form-image">
                <img src="../assets/img/roupaloja.svg" alt="ilustração">
            </div>
        </div>
    </main>
    </div>
    <script src="../assets/js/script.js"></script>
</body>
<?php
    include("../include/rodape.php");
?>
</html>
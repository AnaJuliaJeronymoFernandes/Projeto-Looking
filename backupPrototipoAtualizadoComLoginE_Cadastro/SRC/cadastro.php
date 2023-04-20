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
    <main class="cadastro">
        <div class="containercad">
            <div class="formcadastro">
                <form class="form" method="POST" action="recuperarCadastro.php">
                    <div class="form-header">
                        <h1 class="cadastroh2">Cadastro</h1>
                    <div class="login-button">
                        <a href="login.php">Entrar</a>
                    </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                           <label for="nome">Nome</label>
                           <input type="text" id="nome" name="nome" placeholder="Digite seu primeiro nome"/>
                        </div>

                        <div class="input-box">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome"/>
                        </div>

                        <div class="input-box">
                            <label for="cpf">CPF</label>
                            <input type="number" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx" min="0"/>
                        </div>

                        <div class="input-box">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade" min="0"/>
                        </div>

                        <div class="input-box">
                            <label for="tel">Telefone</label>
                            <input type="number" id="tel" name="tel" placeholder="(xx) xxxx-xxxx" min="0"/>
                        </div>
                        
                        <div class="input-box">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="joao@email.com"/>
                        </div>
                        
                        <div class="input-box">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" placeholder="Digite sua senha"/>
                        </div>

                        <div class="input-box">
                            <label for="csenha">Confirme a senha</label>
                            <input type="password" id="csenha" name="csenha" placeholder="Digite sua senha novamente"/>
                        </div>
                    </div>

                    <div class="continue-button-cad2">
                        <button type="submit">Continuar</button>
                        <!-- <button><a href="cadastro2.php">Continuar</a></button> -->
                    </div>
                </form>
            </div>
            <div class="form-image">
                <img src="../assets/img/costurando.svg" alt="ilustração">
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
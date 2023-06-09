<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Entrar</title>
</head>
<?php
    include("../include/cabecalho.php");
?>
<body>
    <main class="login">
        <div class="containerlog">
            <div class="form-image">
                <img src="../assets/img/login.svg" alt="ilustração">
            </div>
            <div class="formlogin">
                <form class="form" action="recuperarLogin.php" method="POST">
                    <div class="form-header">
                        <div>
                            <h1 class="loginh1">Entrar</h1>
                        </div>
                        <div class="cadastro-button">
                            <a href="cadastro.php">Cadastre-se</a>
                        </div>
                    </div>
                    <div>
                        <div class="input-box">
                            <label for="email"><span class="material-symbols-outlined" id="iconelogin">mail</span></label>
                            <input type="email" id="email" name="Email" placeholder="E-mail"/>
                        </div>

                        <div class="input-box">
                            <label for="senha"><span class="material-symbols-outlined" id="iconelogin">lock</span></label>
                            <input type="password" id="senha" name="Senha" placeholder="Senha"/>
                        </div>
                        <div class="input-box">
                        <span class="material-symbols-outlined" id="olho" onclick="ver_senha()">visibility</span><p>Mostrar senha</p>
                        </div>
                        <div class="entrar-button">
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="../assets/js/script.js"></script>
</body>
<?php
    include("../include/rodape.php");
?>
</html>
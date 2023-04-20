<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Looking</title>
</head>
<body class="perfil">
<?php
        include ("../include/cabecalhoMenu.php");
    ?>
        <div class="cabecalho">
                <div class="capa"></div>
                <div class="dados">
                    <div class="botoes">
                        <button class="btnazul" onclick="">Editar Perfil</button>
                    </div>
                    <div class="imgperfil">
                        <img src="../assets/img/Bruna.jpg" alt="imagem de perfil">
                        <h2>Bruna Hamada</h2>
                    </div>
                    <div class="contatos">
                        <p><span class="material-symbols-outlined">pin_drop</span> Araraquara - SP</p>
                        <p><span class="material-symbols-outlined">call</span> (16) 99614-2354</p>
                    </div>
                </div>
        </div>
        <hr></hr>
        <div class="guardaroupa">
                    <h3>Meu Guarda-Roupa</h3>
                    <p>Nenhuma peça cadastrada</p>
                    <button class="btnazul" onclick="red_peca()">Cadastrar Peça</button>
        </div>  
    </main>
    <script src="../assets/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<?php
        include("../include/rodape.php");
    ?>
</html>
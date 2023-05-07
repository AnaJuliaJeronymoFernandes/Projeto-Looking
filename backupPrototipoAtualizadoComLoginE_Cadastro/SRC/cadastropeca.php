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
<body>
    <?php
        include ("../include/cabecalhoMenu.php");
        require("operacoes.php");
    ?>
    <main class="cadastropeca">
        <div class="sidebar ajeitaSidebar">
            <div class="conteudo">
            <img src="../assets/img/Bruna.jpg" class="image" alt="">
            <h2>Bruna</h2>
            <a href="meuperfil.php"><span class="material-symbols-outlined">person</span>Perfil</a>
            <a href="favoritos.php"><span class="material-symbols-outlined">star</span>Favoritos</a>
            <a href=""><span class="material-symbols-outlined">checkroom</span>Cadastrar Loja</a>
            <a href=""><span class="material-symbols-outlined">settings</span>Configurações</a>
            <a href="../public/index.php" id="sair"><span class="material-symbols-outlined">logout</span>Sair</a>
            </div>
        </div>
        <div class="containercad">
            <div class="form-image">
                <img src="../assets/img/cadastropeca.svg" alt="ilustração">
            </div>
            <div class="formcadastro">
                <form class="form" action="pecasucesso.php">
                    <div class="form-header">
                        <h1 class="cadastroh1">Cadastro de peça</h1>
                    </div>
                    <div class="colunas">
                    <div class="coluna1">
                        <div class="input-group">
                            <div class="input-box">
                                <label for="descricao">Descrição</label>
                                <input type="text" id="descricao" name="descricao" placeholder="Descreva brevemente"/>
                            </div>
                            <div class="input-box">
                                <label for="tecido">Tecido</label>
                                <input type="text" id="tecido" name="tecido" placeholder="Ex: Jeans"/>
                            </div>
                            <div class="input-box">
                                <label for="tamanho">Tamanho</label>
                                <input type="text" id="tamanho" name="tamanho" placeholder="Ex: 40 ou M"/>
                            </div>
                        </div>

                        
                    </div>
                        <div class= "coluna2">
                            <div class="coluna2">
                            <label>Disponível para trocas?</label>
                                <div class="loja-input">
                                    <input type="radio" id="nao" name="loja">
                                    <label for="nao">Não</label>
                                </div>
                                <div class="loja-input">
                                    <input type="radio" id="sim" name="loja">
                                    <label for="sim">Sim</label>
                                </div>
                                <div class="input-group">
                            <div class="input-box">
                                <label for="palavrachave">Palavras chaves</label>
                                <input type="text" id="palavrachave" name="palavrachave" placeholder="Palavras chaves para a peça"/>
                            </div>
                                
                                <div class="coluna2">
                        <div class="input-box">
                            <label for="caminhopeca">Imagem</label>
                            <input type="file" id="caminhopeca" name="caminhopeca" accept="image/*"/>
                        </div>
                        <div id="img-container">
                            <img id="preview" src="">
                        </div>
                    </div>
                    <div class="coluna3">
                    <div class="continue-button-peca">
                        <button type= "submit">Continuar</button>
                    </div>
</div>
                        </div>
                        </div>
                    
                    </div>
                    
                </form>
            </div>
        </div>
    </main>
    <footer class="rodape">
        <div class="footer-logo"><a href="#"><img src="../assets/img/LookingMenu.png" alt="Looking" class="logo-rodape"></a></div>
        <p>Copyright&copy; 2022 IFSP - Campus Araraquara</p>
    </footer>
    </div>
    <script src="../assets/js/script.js"></script>
</body>
<?php
    include("../include/rodape.php");
?>
</html>
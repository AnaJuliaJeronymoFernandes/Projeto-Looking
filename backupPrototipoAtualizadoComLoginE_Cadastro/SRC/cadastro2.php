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
                <form class="form" method="POST" action="recuperarCadastro2.php" enctype="multipart/form-data">
                    <div class="form-header">
                        <h1 class="cadastroh1">Cadastro</h1>
                    <div class="login-button">
                        <a href="login.php">Entrar</a>
                    </div>
                    </div>

                    <div class="input-group">
                    <div class="colunacadastro">
                        <div class="coluna1">
                            <div class="input-box">
                                <label for="nascimento">Data de nascimento</label>
                                <input type="date" id="nascimento" name="Nascimento" required/>
                            </div>

                            <div class="input-box">
                                <label for="genero">Gênero</label>
                                <select id="genero" name="NomeGenero" required>
                                    <option value="">Escolher...</option>
                                    <option name="Feminino" value="female">Feminino</option>
                                    <option name="Maculino" value="male">Masculino</option>
                                    <option name="Nao binario" value="genderfluid">Não binário</option>
                                    <option name="Outro" value="other">Outro</option>
                                    <option name="Prefiro nao informar" value="none">Prefiro não informar</option>
                                </select>
                            </div>
                        </div>
                        <div class="coluna2">
                            <div class="input-box">
                                <label for="imgpreview">Imagem de perfil</label>
                                <input type="file" id="imgpreview" name="imgpreview" accept="image/*"/>
                            </div>
                            <div id="img-container">
                                <img id="preview" src="">
                            </div>
                        </div>
                    </div>
                            <div class="form-header">
                                <h3>Tamanhos</h3>
                            </div>
                            <div class="input-box">
                                <label for="camiseta">Camiseta</label>
                                <select id="camiseta" name="Camiseta" required>
                                    <option value="">Escolher...</option>
                                    <option value="PP">PP</option>
                                    <option value="P">P</option>
                                    <option value="M">M</option>
                                    <option value="G">G</option>
                                    <option value="GG">GG</option>
                                    <option value="XG">XG</option>
                                    <option value="XGG">XGG</option>
                                </select>
                            </div>
                            <div class="input-box">
                                <label for="calca">Calça</label>
                                <input type="number" id="calca" name="Calca" min="34" max="48" step= "2" placeholder="min:34 max:48" required>
                            </div>
                            <div class="input-box">
                                <label for="calcado">Calçado</label>
                                <input type="number" id="calcado" name="Calcado" min="33" max="48" placeholder="min: 33 max:48" required>
                            </div>
                            <div class="loja" required>
                                <label>Possui loja física? (Brechó/Bazar)</label>
                                    <div class="loja-input">
                                        <input type="radio" id="nao" name="loja">
                                        <label for="nao">Não</label>
                                    </div>
                                    <div class="loja-input">
                                        <input type="radio" id="sim" name="loja">
                                        <label for="sim">Sim</label>
                                    </div>
                            </div>
                    </div>

                    <div class="continue-button">
                        <button type="submit">Cadastrar</button>
                        <!-- <button><a href="../sucesso.html">Cadastrar</a></button> -->
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
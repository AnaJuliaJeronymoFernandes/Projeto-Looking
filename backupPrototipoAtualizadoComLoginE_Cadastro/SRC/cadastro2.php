<?php
    include("conexao.php");
?>

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
                        <h1 class="cadastroh2">Cadastro</h1>
                    <div class="login-button">
                        <a href="login.php">Entrar</a>
                    </div>
                    </div>

                    <div class="input-group">
                    <div class="colunacadastro">
                        <div class="coluna1">
                            <div class="input-box">
                                <label for="nascimento">Data de Nascimento</label>
                                <input type="date" id="nascimento" name="nascimento"/>
                            </div>

                            <div class="input-box">
                                <label for="genero">Gênero</label>
                                <select id="genero" name="genero">
                                    <option value="">Escolher...</option>
                                    <option value="female">Feminino</option>
                                    <option value="male">Masculino</option>
                                    <option value="genderfluid">Não binário</option>
                                    <option value="other">Outro</option>
                                    <option value="none">Prefiro não informar</option>
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
                                <select id="camiseta" name="camiseta">
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
                                <input type="number" id="calca" name="calca" min="0" max="100" placeholder="Ex: 42">
                            </div>
                            <div class="input-box">
                                <label for="calcado">Calçado</label>
                                <input type="number" id="calcado" name="calcado" min="0" max="100" placeholder="Ex: 40">
                            </div>
                    </div>

                    <div class="continue-button-cad2">
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
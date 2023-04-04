<?php
	session_start();
	if(!isset($_SESSION["cpf"])) {
		header("location: public/index.php");
		die();
	}
?>

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
<body class="inicio">
    <?php
    include("../include/cabecalhoMenu.php");
?>
    <main class="inicio">
        <div class="sidebar ajeitaSidebar">
            <div class="conteudo">
            <img src="../assets/img/Bruna.jpg" class="image" alt="">
            <h2>Bruna</h2>
            <a href="meuperfil.php"><span class="material-symbols-outlined">person</span>Perfil</a>
            <a href="favoritos.php"><span class="material-symbols-outlined">star</span>Favoritos</a>
            <a href="cadastroLoja.php"><span class="material-symbols-outlined">checkroom</span>Cadastrar Loja</a>
            <a href="configuracoes.php"><span class="material-symbols-outlined">settings</span>Configurações</a>
            <a href="logout.php" id="sair"><span class="material-symbols-outlined">logout</span>Sair</a>
            </div>
        </div>

        <div id="feed">

            <!-- PRIMEIRO POST -->
            <div class="post">
                <div class="post-header">
                    <img src="../assets/img/Ana.jpeg">
                    <p>Ana Julia Jeronymo</p>
                </div>
                <div class="post-image">
                    <img src="../assets/img/boneVermelho.jpg">
                </div>
                <div class="post-footer">
                    <div class="post-description">
                        <p>Boné Vermelho</p>
                        <div class="post-tag">
                            <ion-icon name="shirt-outline"></ion-icon>
                            <p>Brim</p>
                        </div>
                        <div class="post-tag">
                            <ion-icon name="pricetag-outline"></ion-icon>
                            <p>M</p>
                        </div>
                    </div>
                    <div class="post-actions">
                        <ion-icon name="star-outline"></ion-icon>
                        <a href="urlCompartilhar.php"><ion-icon name="arrow-redo-outline"></ion-icon></a>
                    </div>
                </div>
            </div>
            
            <!-- SEGUNDO POST -->
            <div class="post">
                <div class="post-header">
                    <img src="../assets/img/Gabriel.jpg">
                    <p>Gabriel Albino</p>
                </div>
                <div class="post-image">
                    <img src="../assets/img/blusaPreta.jpg">
                </div>
                <div class="post-footer">
                    <div class="post-description">
                        <p>Blusa Preta</p>
                        <div class="post-tag">
                            <ion-icon name="shirt-outline"></ion-icon>
                            <p>Algodão</p>
                        </div>
                        <div class="post-tag">
                            <ion-icon name="pricetag-outline"></ion-icon>
                            <p>G</p>
                        </div>
                    </div>
                    <div class="post-actions">
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="arrow-redo-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- TERCEIRO POST -->
            <div class="post">
                <div class="post-header">
                    <img src="../assets/img/Lara.jpeg">
                    <p>Lara Valentim</p>
                </div>
                <div class="post-image">
                    <img src="../assets/img/calcaAzul.jpg">
                </div>
                <div class="post-footer">
                    <div class="post-description">
                        <p>Calça Azul Claro</p>
                        <div class="post-tag">
                            <ion-icon name="shirt-outline"></ion-icon>
                            <p>Jeans</p>
                        </div>
                        <div class="post-tag">
                            <ion-icon name="pricetag-outline"></ion-icon>
                            <p>36</p>
                        </div>
                    </div>
                    <div class="post-actions">
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="arrow-redo-outline"></ion-icon>
                    </div>
                </div>
            </div>
            
            
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

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
        include ("../include/cabecalhoMenu.php");
        require("operacoes.php");
        
        buscarPeca($palavrachave, $caminhopeca, $donopeca, $fotodono, $tecido, $tamanho);
    ?>

        <div id="feed">
            <h2>Resultados para <? $palavrachave ?></h2>
            <div class="post">
                <div class="post-header">
                    <img src="<? $sqlfotodono ?>">
                    <p><? $donopeca ?></p>
                    <ion-icon name="add-circle-outline"></ion-icon>
                </div>
                <div class="post-image">
                    <img src="<? $caminhopeca ?>">
                </div>
                <div class="post-footer">
                    <div class="post-description">
                        <p><? $palavrachave ?></p>
                        <div class="post-tag">
                            <ion-icon name="shirt-outline"></ion-icon>
                            <p><? $tecido ?></p>
                        </div>
                        <div class="post-tag">
                            <ion-icon name="pricetag-outline"></ion-icon>
                            <p><? $tamanho ?></p>
                        </div>
                    </div>
                    <div class="post-actions">
                        <!-- <ion-icon onclick="red_buscafavorito()" name="star-outline"></ion-icon> -->
                        <ion-icon name="chatbubbles-outline"></ion-icon>
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
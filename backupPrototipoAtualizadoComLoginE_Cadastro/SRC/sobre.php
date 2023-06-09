<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Sobre</title>
</head>
<?php
    include("../include/cabecalho.php");
?>
<body class="bodysobre">
    
    <main class="sobre">
        <div class="container">
            <h1>Sobre</h1>
            <div class="slider">
                <div class="slides">
                    <!--Radio Buttons-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">

                    <!--Slide Images-->
                    <div class="slide first" id="slide1">
                        <div class="mascarapreta">
                        <h2>Origem</h2>
                        <p>A idealização do projeto iniciou-se através do TCC de informática integrado ao ensino médio pelo Instituto Federal de Educação, Ciência e Tecnologia de São Paulo - Campus Araraquara. Iniciado no ano de 2022, desenvolvido por alunos do 4° ano.</p>
                        </div>
                    </div>
                    <div class="slide" id="slide2">
                        <div class="mascarapreta">
                        <h2>Objetivo</h2>
                        <p>O Looking propõe a valorização das peças de roupa, com o intuito de proporcionar um ciclo de vida maior para essas através de trocas entre usuários, brechós e bazares opondo-se aos ideais do <i>fast-fashion</i>.</p>
                        </div>
                    </div>
                    <div class="slide" id="slide3">
                        <div class="mascarapreta">
                        <h2>O Nome</h2>
                        <p>É um trocadilho com a palavra <i>Look</i> do inglês, que significa "estilo" e também "olhar", portanto representa uma "busca por estilo". Além disso a logo contém uma lemniscata simbolizando o ciclo de vida das roupas.</p>
                        </div>
                    </div>
                    <div class="slide" id="slide4">
                        <div class="mascarapreta">
                        <h2>Gostou?</h2>
                        <div class="btninicio">
                            <button class="btnazul" onclick="red_cadastro()">Clique aqui</button>
                        </div>
                        </div>
                    </div>

                    <!--Navigation auto-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>

                <div class="manual-navigation">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>
            <h1>Equipe</h1>
            <div class="autores">
                <div class="autor">
                    <div class="imagem">
                    <img src="../assets/img/Ana.jpeg" alt="Ana Julia"/>
                    </div>
                    <div class="texto">
                        <h2>Ana Julia</h2>
                        <ul>
                            <li><span class="material-symbols-outlined">magic_button</span> 18 anos</li>
                            <li><a href="https://www.instagram.com/jeronymoooooo" target="_blank"><span class="material-symbols-outlined">alternate_email</span> jeronymoooooo</a></li>
                            <li><span class="material-symbols-outlined">favorite</span> Escotismo e karatê</li>
                            <li><span class="material-symbols-outlined">psychology</span> Technovation Girls</li>
                        </ul>
                    </div>
                </div>
                <div class="autor">
                    <div class="imagem">
                    <img src="../assets/img/gato-usando-roupa-Petlove.jpg" alt="Matheus"/>
                    </div>
                    <div class="texto">
                        <h2>Matheus</h2>
                        <ul>
                            <li><span class="material-symbols-outlined">magic_button</span> 17 anos</li>
                            <li><a href="https://www.instagram.com/gabriel.alb5" target="_blank"><span class="material-symbols-outlined">alternate_email</span> gabriel.alb5</a></li>
                            <li><span class="material-symbols-outlined">favorite</span> Taekwondo e jogos</li>
                            <li><span class="material-symbols-outlined">psychology</span> Programador</li>
                        </ul>
                    </div>
                </div>
                <div class="autor">
                    <div class="imagem">
                    <img src="../assets/img/Lara.jpeg" alt="Lara"/>
                    </div>
                    <div class="texto">
                        <h2>Lara</h2>
                        <ul>
                            <li><span class="material-symbols-outlined">magic_button</span> 18 anos</li>
                            <li><a href="https://www.instagram.com/laravalentim__" target="_blank"><span class="material-symbols-outlined">alternate_email</span> laravalentim__</a></li>
                            <li><span class="material-symbols-outlined">favorite</span> Dança e games</li>
                            <li><span class="material-symbols-outlined">psychology</span> Technovation Girls</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </main>
    <script src="../assets/js/script.js"></script>
</body>
<?php
    include("../include/rodape.php");
?>
</html>
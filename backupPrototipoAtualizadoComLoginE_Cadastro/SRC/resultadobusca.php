<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Looking</title>
</head>
<body class="inicio">
    <header class="logado">
        <nav class="navbar ajeitaNavBar">
            <div class="iconemenu">
                <input type="checkbox" id="check">
                <label for="check">
                <span class="material-symbols-outlined">menu</span>
                </label>
            </div>
            <div class="navbar-logo">
                <a href="inicio.html">
                    <img src="assets/img/LookingMenu.png" alt="Looking" class="logo">
                </a>
            </div>
            <div class="pesquisa">
                <form action="resultadobusca.html">
                    <input type="text" name="pesquisa" placeholder="Buscar..."/>
                    <button type="submit">
                        <span class="material-symbols-outlined">search</span>
                    </button>
                </form>
            </div>
        </nav>
    </header>
    <main class="resultadobusca">
        <div class="sidebar ajeitaSidebar">
            <div class="conteudo">
            <img src="assets/img/Bruna.jpg" class="image" alt="">
            <h2>Bruna</h2>
            <a href="perfilpecas.html"><span class="material-symbols-outlined">person</span>Perfil</a>
            <a href="favoritos.html"><span class="material-symbols-outlined">star</span>Favoritos</a>
            <a href=""><span class="material-symbols-outlined">checkroom</span>Cadastrar Loja</a>
            <a href=""><span class="material-symbols-outlined">settings</span>Configurações</a>
            <a href="index.html" id="sair"><span class="material-symbols-outlined">logout</span>Sair</a>
            </div>
        </div>
        <div id="feed">
            <h2>Resultados para "Bermuda"</h2>
            <div class="post">
                <div class="post-header">
                    <img src="assets/img/Gabriel.jpg">
                    <p>Gabriel Albino</p>
                    <ion-icon name="add-circle-outline"></ion-icon>
                </div>
                <div class="post-image">
                    <img src="assets/img/bermuda.jpg">
                </div>
                <div class="post-footer">
                    <div class="post-description">
                        <p>Bermuda cargo cinza</p>
                        <div class="post-tag">
                            <ion-icon name="shirt-outline"></ion-icon>
                            <p>Algodão</p>
                        </div>
                        <div class="post-tag">
                            <ion-icon name="pricetag-outline"></ion-icon>
                            <p>42</p>
                        </div>
                    </div>
                    <div class="post-actions">
                        <ion-icon onclick="red_buscafavorito()" name="star-outline"></ion-icon>
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                        <ion-icon name="arrow-redo-outline"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
            
    </main>

        
        <script src="assets/js/script.js"></script>
        
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
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
    <main>
        <div class="sidebar ajeitaSidebar">
            <div class="conteudo">
            <img src="assets/img/Bruna.jpg" class="image" alt="">
            <h2>Bruna</h2>
            <a href="meuperfil.html"><span class="material-symbols-outlined">person</span>Perfil</a>
            <a href="favoritosvazio.html"><span class="material-symbols-outlined">star</span>Favoritos</a>
            <a href=""><span class="material-symbols-outlined">checkroom</span>Cadastrar Loja</a>
            <a href=""><span class="material-symbols-outlined">settings</span>Configurações</a>
            <a href="index.html" id="sair"><span class="material-symbols-outlined">logout</span>Sair</a>
            </div>
        </div>
        <div class="cabecalho">
                <div class="capa"></div>
                <div class="dados">
                    <div class="botoes">
                        <button class="btnazul" onclick="">Editar Perfil</button>
                    </div>
                    <div class="imgperfil">
                        <img src="assets//img/Bruna.jpg" alt="imagem de perfil">
                        <h2>Bruna Hamada</h2>
                    </div>
                    <div class="contatos">
                        <p><span class="material-symbols-outlined">pin_drop</span> Araraquara - SP</p>
                        <p><span class="material-symbols-outlined">call</span> (16) 99614-2354</p>
                        <p><span class="material-symbols-outlined">person</span> Seguidores: 0 | </span>Seguindo: 0</p>
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
    <script src="assets/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
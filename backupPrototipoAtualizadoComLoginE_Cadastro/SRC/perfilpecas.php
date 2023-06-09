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
    <header class="logado">
        <nav class="navbar ajeitaNavBar">
            <div class="iconemenu">
                <input type="checkbox" id="check">
                <label for="check">
                <span class="material-symbols-outlined">menu</span>
                </label>
            </div>
            <div class="navbar-logo">
                <a href="inicio.php">
                    <img src="../assets/img/LookingMenu.png" alt="Looking" class="logo">
                </a>
            </div>
            <div class="pesquisa">
                <form action="resultadobusca.php">
                    <input type="text" name="pesquisa" placeholder="Buscar..."/>
                    <button type="submit">
                        <span class="material-symbols-outlined">search</span>
                    </button>
                </form>
            </div>
        </nav>
    </header>
    <main class="perfilpecas">
        <div class="sidebar ajeitaSidebar">
            <div class="conteudo">
            <img src="../assets/img/Bruna.jpg" class="image" alt="">
            <h2>Bruna</h2>
            <a href="perfilpecas.php"><span class="material-symbols-outlined">person</span>Perfil</a>
            <a href="favoritos.php"><span class="material-symbols-outlined">star</span>Favoritos</a>
            <a href=""><span class="material-symbols-outlined">checkroom</span>Cadastrar Loja</a>
            <a href=""><span class="material-symbols-outlined">settings</span>Configurações</a>
            <a href="../public/index.php" id="sair"><span class="material-symbols-outlined">logout</span>Sair</a>
            </div>
        </div>
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
                        <p><span class="material-symbols-outlined">person</span> Seguidores: 0 | </span>Seguindo: 0</p>
                    </div>
                </div>
        </div>
        <hr></hr>
        <div class="guardaroupa">
            <h3>Meu Guarda-Roupa</h3>
                <div class="btn_cadastrarpeca">
                    <button class="btnazul" onclick="red_peca()">Cadastrar Peça</button>
                </div>
                <div class="pecas">
                    <div class="peca1">
                        <img src="../assets/img/converse.jpg" alt="converse">
                    </div>
                    <div class="peca2">
                        <img src="../assets/img/vestido.jpg" alt="bermuda">
                    </div>
                </div>
        </div>  
    </main>
    <script src="../assets/js/script.js"></script>
</body>
</html>

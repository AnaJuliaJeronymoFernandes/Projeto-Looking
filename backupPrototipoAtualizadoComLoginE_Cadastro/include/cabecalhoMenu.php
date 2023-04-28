<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Looking</title>
</head>
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
    <main class="inicio">
        <div class="sidebar ajeitaSidebar">
            <div class="conteudo">
            <img src="../assets/img/Bruna.jpg" class="image" alt="">
            <h2>Bruna</h2>
            <a href="meuperfil.php"><span class="material-symbols-outlined">person</span>Perfil</a>
            <a href="favoritos.php"><span class="material-symbols-outlined">star</span>Favoritos</a>
            <a href="cadastroloja.php"><span class="material-symbols-outlined">checkroom</span>Cadastrar Loja</a>
            <a href=""><span class="material-symbols-outlined">settings</span>Configurações</a>
            <a href="../SRC/logout.php" id="sair"><span class="material-symbols-outlined">logout</span>Sair</a>
            </div>
        </div>
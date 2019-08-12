<nav class="navbar">
    <div id="navbarConnect">
        <?php
    
    if (isset($_SESSION['login'])) {
        ?>
        <p>Connecté en tant que $login</p>
        <form action="index.php" method="post">
            <button type="submit">Se déconnecter</button>
        </form>
        <?php
    } else {
        ?>
            <form id="navbarNotConnectForm" action="index.php" method="post">
                    <a href="index.php?page=subscribe">S'inscrire</a>
                <input type="text" placeholder="mail">
                <input type="password" placeholder="password">
                <button type="submit">Se connecter</button>
            </form>
        <?php
    }
?>
    </div>

    <ul>
        <li>
            <h1><a href="index.php"><img src="public/img/logo40.png"></a></h1>
        </li>
        <li><a href="index.php?page=1"> Pour les parents </a></li>
        <li><a href="index.php?page=2">Pour les professionnels</a></li>
        <li><a href="index.php?page=3">L'association</a></li>
        <li><a href="index.php?page=4">Agenda</a></li>
        <li><a href="index.php?page=5">Boutique</a></li>
        <li><a href="index.php?page=6">Galerie Photos</a></li>
        <li><a href="index.php?page=7">Livre d'or</a></li>
        <li><a href="index.php?page=8">Contact</a></li>
    </ul>

</nav>
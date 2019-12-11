<header>
    <?php session_start(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <div class="menu">
        <a id="iconeSite" href="index.php"><img src="ressources/de.png" alt="dé"></a>
        <a class="itemMenu" href="index.php">Accueil</a>
        <a class="itemMenu" href="reservation.php">Réservation</a>
        <a class="itemMenu" href="forum.php">Forum</a>
        <a class="itemMenu" href="connexion.php">Connexion</a>
        <a href="connexion.html"><img id="iconeCompte" src="ressources/bonhomme.png"
                alt="personnage avec une couronne"></a>
    </div>
    <div id="menuDeroulant">
        <img class="menuBtn" src="ressources/menu.png" alt="3 points suspensions" onclick="menuDeroulant()">
        <div id="affichage" class="menuDeroulant-contenu">
            <a class="itemMenu" href="index.php">Accueil</a>
            <a class="itemMenu" href="reservation.php">Réservation</a>
            <a class="itemMenu" href="forum.php">Forum</a>
            <a class="itemMenu" href="connexion.php">Connexion</a>
        </div>
        <a href="connexion.html"><img id="iconeCompte" src="ressources/bonhomme.png"
                alt="personnage avec une couronne"></a>
    </div>

</header>

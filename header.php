
    <?php session_start();?>
<header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <div class="menu">
        <a id="iconeSite" href="index.php"><img src="ressources/de.png" alt="dé"></a>
        <a class="itemMenu" href="index.php">Accueil</a>
        <a class="itemMenu" href="reservation.php">Réservation</a>
        <a class="itemMenu" href="forum.php">Forum</a>
    <?php if(isset($_SESSION['isConnected']) && $_SESSION['isConnected']!=0){ ?>
        <?php if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1){ ?>
            <a class="itemMenu" href="admin.php">Admin</a>
        <?php }?>
        <a class="itemMenu" href="deconnexion.php">Déconnexion</a>
        <a href="profil.php"><img id="iconeCompte" src="ressources/bonhomme.png"alt="personnage avec une couronne"><?= $_SESSION['Pseudo'];?></a>
    <?php } else { ?>
        <a class="itemMenu" href="connexion.php">Connexion</a>
        <a href="connexion.php"><img id="iconeCompte" src="ressources/bonhomme.png"alt="personnage avec une couronne"></a>
    <?php } ?>

    </div>
    <div id="menuDeroulant">
        <img class="menuBtn" src="ressources/menu.png" alt="3 points suspensions" onclick="menuDeroulant()">
        <div id="affichage" class="menuDeroulant-contenu">
            <a class="itemMenu" href="index.php">Accueil</a>
            <a class="itemMenu" href="reservation.php">Réservation</a>
            <a class="itemMenu" href="forum.php">Forum</a>
        <?php if(isset($_SESSION['isConnected']) && $_SESSION['isConnected']!=0){ ?>
            <?php if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1){ ?>
                <a class="itemMenu" href="admin.php">Admin</a>
            <?php }?>
            <a class="itemMenu" href="deconnexion.php">Déconnexion</a>
            </div>
            <a href="profil.php"><img id="iconeCompte" src="ressources/bonhomme.png" alt="personnage avec une couronne"></a>
        <?php } else { ?>
            <a class="itemMenu" href="connexion.php">Connexion</a>
            </div>
            <a href="connexion.php"><img id="iconeCompte" src="ressources/bonhomme.png" alt="personnage avec une couronne"></a>
        <?php } ?>
    </div>
</header>

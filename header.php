
    <?php session_start();?>
<header>

    <div class="menu">
        <a id="iconeSite" href="index.php"><i id="iconeCompte" class="fas fa-dice-d20"></i></a>
        <a class="itemMenu" href="index.php">Accueil</a>
        <a class="itemMenu" href="reservation.php">Réservation</a>
        <a class="itemMenu" href="forum.php">Forum</a>
    <?php if(isset($_SESSION['isConnected']) && $_SESSION['isConnected']!=0){ ?>
        <?php if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1){ ?>
            <a class="itemMenu" href="admin.php">Admin</a>
        <?php }?>
        <a class="itemMenu" href="deconnexion.php">Déconnexion</a>
        <?php if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1): ?>
            <a href="profil.php"><i id="iconeCompte" class="fas fa-user-astronaut"></i><?= $_SESSION['Pseudo'];?></a>
        <?php else: ?>
            <a href="profil.php"><i id="iconeCompte" class="fas fa-user"></i><?= $_SESSION['Pseudo'];?></a>
        <?php endif; ?>
    <?php } else { ?>
        <a class="itemMenu" href="connexion.php">Connexion</a>
        <a href="connexion.php"><i id="iconeCompte" class="fas fa-user-slash"></i></a>
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
            <?php if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1): ?>
                <a href="profil.php"><i id="iconeCompte" class="fas fa-user-astronaut"></i><?= $_SESSION['Pseudo'];?></a>
            <?php else: ?>
                <a href="profil.php"><i id="iconeCompte" class="fas fa-user"></i><?= $_SESSION['Pseudo'];?></a>
            <?php endif; ?>
        <?php } else { ?>
            <a class="itemMenu" href="connexion.php">Connexion</a>
            </div>
            <a href="connexion.php"><i id="iconeCompte" class="fas fa-user-slash"></i></a>
        <?php } ?>
    </div>
</header>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Forum</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="ressources/dé.png">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/chat.css">
</head>


<body onload="load()">
<?php echo 'Bonjour' ?>
    <header>
        <div class="menu">
            <a id="iconeSite" href="index.html"><img src="ressources/dé.png" alt="dé"></a>
            <a class="itemMenu" href="index.html">Accueil</a>
            <a class="itemMenu" href="reservation.html">Réservation</a>
            <a class="itemMenu" href="forum.html">Forum</a>
            <a class="itemMenu" href="connexion.html">Connexion</a>
            <a href="connexion.html"><img id="iconeCompte" src="ressources/bonhomme.png"
                    alt="personnage avec une couronne"></a>
        </div>
        <div id="menuDeroulant">
            <img class="menuBtn" src="ressources/menu.png" alt="3 points suspensions" onclick="menuDeroulant()">
            <div id="affichage" class="menuDeroulant-contenu">
                <a class="itemMenu" href="index.html">Accueil</a>
                <a class="itemMenu" href="reservation.html">Réservation</a>
                <a class="itemMenu" href="forum.html">Forum</a>
                <a class="itemMenu" href="connexion.html">Connexion</a>
            </div>
            <a href="connexion.html"><img id="iconeCompte" src="ressources/bonhomme.png"
                    alt="personnage avec une couronne"></a>
        </div>

    </header>
    <div class="intro">
      <h1>
        L'Antre du Donjonneur
      </h1>

<div>
    <p class="text">    Bienvenue dans l'antre du Donjonneur</p>

</div>
<div>
    <p class="text">Vous êtes à la recherche d'aventure, de frissons? C'est ici que vous trouverez ce qu'il vous faut! Entre traitrises, fêtes et trésors vous essayerez d'évoluer dans un environnement fascinant.
</p></div>
<a href="#news"><img id="bouton1" src="./ressources/bouton1.png" alt="Icon Boutton"></a>

    </div>
    <div id="news">
    <div class="news1">
        <a class="fleche" onclick ="g1()">
            <img src="./ressources/flecheg.png" alt=""></a>
<div class="contenu">
    <img src="" alt="" id="i1">

</div>
<div class="contenu">
    <p id ="t1"></p>

</div>

        <a class="fleche"  onclick ="d1()">
            <img src="./ressources/fleche.png" alt=""></a>
    </div>
        <div class="news2">
            <a class="fleche" onclick ="g2()">
                <img src="./ressources/flecheg.png" alt=""></a>
    <div class="contenu">
        <img src="" alt="" id="i2">

    </div>
<div class="contenu">
        <p id ="t2"></p>

    </div>

            <a class="fleche" onclick ="d2()">
                <img src="./ressources/fleche.png" alt=""></a>
        </div>

    </div>


    <footer>
        <div class="icones">
            <a href="https://www.facebook.com/"><img src="ressources/fb.png" alt="lien FB"></a>
            <a href="https://www.linkedin.com/"><img src="ressources/in.png" alt="lien In"></a>
            <a href="https://www.instagram.com/"><img src="ressources/insta.png" alt="lien insta"></a>
            <a href="https://twitter.com/"><img src="ressources/twitter.png" alt="lien twitter"></a>
        </div>
        <p>@AleaJactaEst</p>
    </footer>

    <script type="text/javascript" src="js/news.js">
    </script>
</body>

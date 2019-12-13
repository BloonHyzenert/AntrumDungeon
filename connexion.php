<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Connexion</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="icon" type="image/png" href="ressources/de.png">
      <link rel="stylesheet" type="text/css" href="css/connexion.css">
      <link rel="stylesheet" type="text/css" href="css/header.css">
      <?php include 'global.php' ?>
    </head>
    <body>
        <?php include 'header.php' ?>
        <div id="connexion">
            <h1>Connexion</h1>
            <form id="formu" action="/" method="POST">
                <p>Pseudo</p><input id="pseudo" type="text" name="pseudo" value="" >
                <p>Mot de Passe</p><input id="password" type="password" name="password" value="" >
                <div id="msgError"></div>
                <p><a href="">Mot de passe oublié</a></p>
                <?php if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1)
                    echo '<p><a href="creation.php">Ajouter un compte</a></p>';?>
                <input class="btn-12" type="submit" value="VALIDER"/>
            </form>
        </div>
        <?php include 'footer.php' ?>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/connexion.js"></script>
    </body>
</html>

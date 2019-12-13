<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Création</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="icon" type="image/png" href="ressources/de.png">
      <link rel="stylesheet" type="text/css" href="css/connexion.css">
      <link rel="stylesheet" type="text/css" href="css/header.css">
      <?php include 'global.php' ?>
    </head>
    <body>
        <?php include 'header.php' ?>
        <div id="connexion">
            <h1>Création de compte</h1>
            <form id="formuCrea" action="/" method="POST">
                <p>Pseudo</p><input id="pseudo" type="text" name="pseudo" value="" >
                <p>Mot de Passe</p><input id="password" type="password" name="password" value="" >
                <p>Mot de Passe Copie</p><input id="password2" type="password" name="password2" value="" >
                <div id="msgError"></div>
                <input class="btn-12" type="submit" value="VALIDER"/>
            </form>
        </div>

        <?php include 'footer.php' ?>

        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/connexion.js"></script>
    </body>
</html>

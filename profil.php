<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Forum</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="ressources/de.png">
  <link rel="stylesheet" type="text/css" href="css/profil.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <?php include 'global.php' ?>
</head>


<body>


    <?php include 'header.php' ?>
  <div id="forum">
      <h1>
        Profil de <?php if(isset($_GET['Pseudo'])){
                            echo $_GET['Pseudo'];
                        }else{
                            echo $_SESSION['Pseudo'];} ?>
      </h1>
      <?php  if(!isset($_GET['idUser'])):?>
      <form id="formuModif" action="/" method="POST">
        <p>Ancien Mot de Passe</p><input id="oldPassword" type="password" name="oldPassword2" value="" >
        <p>Nouveau Mot de Passe</p><input id="password2" type="password" name="password2" value="" >
        <p>Copie</p><input id="password" type="password" name="password" value="" >
        <div id="msgError"></div>
        <p><a href="">Mot de passe oublié</a></p>
        <?php if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1)
        echo '<p><a href="creation.php">Ajouter un compte</a></p>';?>
        <input class="btn-12" type="submit" value="VALIDER"/>
      </form>
    <?php endif; ?>

      <div id="boutton">Conversations en cours :</div>
      <div class="sujets">
        <table id="table">
          <tr>
            <th class="sujet">Sujet</th>
            <th class="auteur">Auteur</th>
            <th class="nombre">Nombre</th>
            <th class="dernier">Dernier</th>
            <?php if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1): ?>
               <th class="admin"></th>
            <?php endif; ?>
          </tr>
          <?php include 'listForumProfil.php' ?>
        </table>

      </div>

  </div>

  <?php include 'footer.php' ?>

  <script type="text/javascript" src="js/menu.js"></script>
  <script type="text/javascript" src="js/connexion.js"></script>
</body>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Forum</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="ressources/de.png">
  <link rel="stylesheet" type="text/css" href="css/forum.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
</head>


<body>


    <?php include 'header.php';
    if(!isset($_SESSION['isConnected']) || $_SESSION['isConnected']==0)
        header("Location: connexion.php");?>
  <div id="forum">

    <h1>
      Forum
    </h1>

    <div onclick="creationSujet()" id="boutton">Créer un Sujet</div>
    <div class="sujets">
      <table>
        <tr>
          <th class="sujet">Sujet</th>
          <th class="auteur">Auteur</th>
          <th class="nombre">Nombre</th>
          <th class="dernier">Dernier</th>
        </tr>
        <tr>
          <td class="sujet"> <a href="chat.php">Soirée Halooween : Faut-il venir déguisé?</a> </td>
          <td class="auteur"> <a href="profil.php">Bloon</a> </td>
          <td class="nombre">8</td>
          <td class="dernier">05/09/2019</td>
        </tr>
      </table>

    </div>
    <div id="popup">
      <div class="box">
        <p>Création d'un Sujet</p>
        <textarea></textarea>
        <div onclick="fermer()" class="btn-12">
            Créer
        </div>
        <div onclick="fermer()" class="btn-12">
            Annuler
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php' ?>
  <script type="text/javascript" src="js/forum.js">
  </script>
  <script type="text/javascript" src="js/menu.js">
  </script>
</body>

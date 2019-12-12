<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Forum</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="ressources/de.png">
  <link rel="stylesheet" type="text/css" href="css/forum.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>


    <?php include 'header.php';?>
  <div id="forum">

    <h1>
      Forum
    </h1>

    <?php if(isset($_SESSION['isConnected']) && $_SESSION['isConnected']!=0):?>
        <div onclick="creationSujet()" id="boutton">Créer un Sujet</div>
    <?php endif; ?>
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
        <?php include 'listForum.php' ?>
      </table>

    </div>
    <form id="popup">
      <div id="box" class="box">
        <p>Création d'un Sujet</p>
        <textarea id="Subject" type="text" name="Subject" value=""></textarea>
        <p id="msgError"></p>
        <input id="js-create" class="btn-12" value="Créer"/>
        <div onclick="fermer()" class="btn-12">
            Annuler
        </div>
      </div>
  </form>
  </div>

  <?php include 'footer.php' ?>
  <script type="text/javascript" src="js/chat.js">
  </script>
  <script type="text/javascript" src="js/forum.js">
  </script>
  <script type="text/javascript" src="js/menu.js">
  </script>
</body>

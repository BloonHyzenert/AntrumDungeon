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

  <script type="text/javascript" src="js/menu.js">
  </script>
</body>

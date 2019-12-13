<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Réservation</title>
  <link rel="stylesheet" type="text/css" href="css/calendrier.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="ressources/de.png">
  <link rel="stylesheet" type="text/css" href="css/reservation.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/calendrier.css">
  <?php include 'global.php' ?>
</head>


<body>


    <?php include 'header.php';
    if(!isset($_SESSION['isConnected']) || $_SESSION['isConnected']==0)
        header("Location: connexion.php");?>

  <div id="reservation">
    <h1>
      Réservation
    </h1>
    <div id="menuSalle">
      <a href="#or">Or</a>
      <a href="#emeraude">Emeraude</a>
      <a href="#saphir">Saphir</a>
      <a href="#rubis">Rubis</a>
      <a href="#grenat">Grenat</a>
    </div>
  </div>
  <div id="or">
    <h2>
      Salle Or
    </h2>

<?php include 'calendar.php' ?>

  </div>
  <div id="emeraude">
    <h2>
      Salle Emeraude
    </h2>

<?php include 'calendar.php' ?>

  </div>
  <div id="saphir">
    <h2>
      Salle Saphir
    </h2>

<?php include 'calendar.php' ?>
  </div>
  <div id="rubis">
    <h2>
      Salle Rubis
    </h2>

<?php include 'calendar.php' ?>
  </div>
  <div id="grenat">
    <h2>
      Salle Grenat
    </h2>
<?php include 'calendar.php' ?>
  </div>
  <?php include 'footer.php' ?>

  <script type="text/javascript" src="js/menu.js">
  </script>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Forum</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="ressources/de.png">
  <link rel="stylesheet" type="text/css" href="css/profil.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
</head>


<body>


    <?php include 'header.php' ?>
  <div id="forum">
      <h1>
        Profil de <?= $_SESSION['Pseudo']  ?>
      </h1>

  </div>

  <?php include 'footer.php' ?>

  <script type="text/javascript" src="js/menu.js">
  </script>
</body>

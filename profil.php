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


    <?php include 'header.php' ?>
  <div id="forum">
      <h1>
        Profil de <?= $_SESSION['Pseudo']  ?>
      </h1>

 <?php if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1){
echo '<a href="creation.php"><div id="boutton">Ajouter un Utilisateur</div></a>';}?>



  </div>

  <?php include 'footer.php' ?>

  <script type="text/javascript" src="js/menu.js">
  </script>
</body>

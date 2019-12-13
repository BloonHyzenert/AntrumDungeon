<?php
session_start();
$_SESSION['isConnected']=0;
unset($_SESSION['idUser']);
unset($_SESSION['Pseudo']);
unset($_SESSION['isAdmin']);
header('Location: connexion.php');
 ?>

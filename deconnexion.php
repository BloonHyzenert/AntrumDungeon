<?php
session_start();
$_SESSION['isConnected']=0;
unset($_SESSION['idUser']);
unset($_SESSION['Pseudo']);
header('Location: index.php');
 ?>

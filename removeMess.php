<?php
session_start();

$mysqli = new mysqli("localhost", "root", "1234", "AntreBD");
if ($mysqli->connect_errno) {
    $retour = "Echec lors de la connexion à MySQL";
}

if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1){
    $sql= "DELETE FROM Message WHERE idMessage=".$_GET['idMessage']."";
    $mysqli->query($sql);
}
header("Location: chat.php?idForum=".$_GET['idForum']);
?>

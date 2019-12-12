<?php
session_start();
$mess='<div class="box">
    <p class="pseudo">'.$_SESSION['Pseudo'].' :</p><p class="date">'.gmdate("Y-m-d H:i:s").'</p>
    <p class="message">'.$_POST['message'].'<p>
</div>';

$mysqli = new mysqli("localhost", "root", "1234", "AntreBD");
if ($mysqli->connect_errno) {
    $retour = "Echec lors de la connexion à MySQL";
}
$_POST['message'] = $mysqli->real_escape_string($_POST['message']);

$sql= "INSERT INTO Message(Text,idForum,idUser) VALUES ('".$_POST['message']."',".$_POST['idForum'].",".$_SESSION['idUser'].")";
$mysqli->query($sql);

echo $mess; ?>

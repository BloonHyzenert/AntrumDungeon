<?php
session_start();
//require_once 'connexionBDD.php';
//$mySQL = new mySQL();
//$bdd = new PDO('mysql:host=localhost;dbname=AntreBD;charset=utf8', 'root', '1234');

$mysqli = new mysqli("localhost", "root", "1234", "AntreBD");
if ($mysqli->connect_errno) {
    $retour = "Echec lors de la connexion à MySQL";
}
if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin']!=1) {
    $retour = 'Seuls les admins peuvent créer des comptes';
}
else if (isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['password2'])
    && $_POST['pseudo']!="" && $_POST['password']!="" && $_POST['password2']!="") {
    if ($_POST['password'] == $_POST['password2']) {

        $sql= "SELECT Password,idUser FROM User WHERE Pseudo = '".$_POST['pseudo']."'";
        $response = $mysqli->query($sql);
        if ($response->num_rows!=0) {
            $retour = 'Ce Pseudo est déjà pris';
        }
        else {
            $name = $_POST['pseudo'];
            $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $sql = "INSERT INTO User(Pseudo,Password) VALUES ('".$name."','".$hash."')";
            $mysqli->query($sql);
            $retour='success';
        };
    } else $retour = 'Les mot de passes ne correspondent pas';

}else $retour = 'Certains champs sont vides';
echo $retour;
?>

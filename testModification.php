<?php
//Appelé en AJAX par connexion.js
//Modification du mot de passe d'un compte
session_start();
$mysqli = new mysqli("localhost", "root", "1234", "AntreBD");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
if (isset($_POST['password2']) && isset($_POST['password']) && isset($_POST['oldPassword'])) {
    $sql= "SELECT Password,Pseudo FROM User WHERE idUser = '".$_SESSION['idUser']."'";
    $response = $mysqli->query($sql);
    if ($response->num_rows!=0) {
        $response->data_seek(0);
        $row = $response->fetch_assoc();
        if (password_verify( $_POST['oldPassword'], $row['Password'])) {
            if($_POST['password']==$_POST['password2'] && $_POST['password2']!=""){
                $sql= "Update User SET Password='".password_hash($_POST['password'], PASSWORD_DEFAULT)."' WHERE idUser = ".$_SESSION['idUser']."";
                $response = $mysqli->query($sql);
                $retour = 'success';
            }else{
                $retour = 'Les nouveaux Mots de Passe ne correspondent pas';
            }
        }
        else $retour = 'Mot de Passe Incorrect';
    }
    else $retour = 'Compte Introuvable';
}
else $retour = 'Certains champs sont vides';
echo $retour;
?>

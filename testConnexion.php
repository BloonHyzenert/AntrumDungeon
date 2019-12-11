<?php
//require_once 'connexionBDD.php';
//$mySQL = new mySQL();
//$bdd = new PDO('mysql:host=localhost;dbname=AntreBD;charset=utf8', 'root', '1234');

$mysqli = new mysqli("localhost", "root", "1234", "AntreBD");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
    !$mysqli->query("CREATE TABLE test(id INT)") ||
    !$mysqli->query("INSERT INTO test(id) VALUES (1)")) {
    echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}

if (isset($_POST['pseudo']) && isset($_POST['password'])) {
    $sql= "SELECT Password,Pseudo,idUser FROM User WHERE Pseudo = '".$_POST['pseudo']."'";
    $response = $mysqli->query($sql);
    if ($response->num_rows!=0) {
        $response->data_seek(0);
        $row = $response->fetch_assoc();
        if ($row['Password']===$_POST['password']) {
            $_SESSION['idUser']=$row['idUser'];
            $_SESSION['pseudo']=$row['Pseudo'];
            $retour = 'success';
        }
        else $retour = 'Mot de Passe Incorrect';
    }
    else $retour = 'Compte Introuvable';

}
echo $retour;
?>

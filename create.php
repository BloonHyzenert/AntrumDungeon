<?php
//Appelé en AJAX par forum.js
//Crée un chat en BDD
session_start();
$mess='<tr>
<td class="sujet"> <a href="chat.php">'.$_POST['Subject'].'</a> </td>
<td class="auteur"> <a href="profil.php">'.$_SESSION['Pseudo'].'</a> </td>
<td class="nombre">0</td>
<td class="dernier">'.gmdate("Y-m-d H:i:s").'</td>'
if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1)
    $mess.= '<td class="admin"><a href="remove.php"></i></a></td>
    </tr>';
else
    $mess.= '</tr>';
$mysqli = new mysqli("localhost", "root", "1234", "AntreBD");
if ($mysqli->connect_errno) {
    $retour = "Echec lors de la connexion à MySQL";
}
$_POST['Subject'] = $mysqli->real_escape_string($_POST['Subject']);
$sql= "INSERT INTO Forum(Subject,idUser) VALUES ('".$_POST['Subject']."','".$_SESSION['idUser']."')";
$mysqli->query($sql);
echo $mess;
?>

<?php
//Affiche tous les chats du forum depuis la BDD, dans lesquels le compte courant à envoyé des messages
$mysqli = new mysqli("localhost", "root", "1234", "AntreBD");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$id=isset($_GET['idUser'])?$_GET['idUser']:$_SESSION['idUser'];
$sql= "SELECT User.idUser,idForum,Pseudo,Subject,Date,nbMessage FROM Forum
INNER JOIN User ON Forum.idUser=User.idUser
WHERE 0 !=(SELECT COUNT(*) FROM Message
WHERE Message.idUser=".$id." AND Message.idForum=Forum.idForum) || Forum.idUser=".$id."";
$response = $mysqli->query($sql);
for ($i=0;$i<$response->num_rows;$i++) {
    $response->data_seek($i);
    $row = $response->fetch_assoc();
    echo '<tr>
    <td class="sujet"> <a href="chat.php?idForum='.$row['idForum'].'">'.$row['Subject'].'</a> </td>
    <td class="auteur"> <a href="profil.php?idUser='.$row['idUser'].'&Pseudo='.$row['Pseudo'].'">'.$row['Pseudo'].'</a> </td>
    <td class="nombre">'.$row['nbMessage'].'</td>
    <td class="dernier">'.$row['Date'].'</td>';
    if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1)
        echo '<td class="admin"><a href="remove.php?idForum='.$row['idForum'].'"><i class="fa fa-close" style="font-size:30px;color:red;"></i></a></td>
        </tr>';
    else
        echo '</tr>';
}

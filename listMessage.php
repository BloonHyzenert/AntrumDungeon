<?php

if(!isset($_GET['idForum']))
    header('Location: forum.php');

$mysqli = new mysqli("localhost", "root", "1234", "AntreBD");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$sql= "SELECT User.idUser,Forum.idForum,User.Pseudo,Subject,Text,Message.Date,idMessage FROM Message
INNER JOIN Forum ON Message.idForum=Forum.idForum
INNER JOIN User ON Message.idUser=User.idUser
WHERE Message.idForum=".$_GET['idForum']." ORDER BY Message.Date LIMIT 10";
$response = $mysqli->query($sql);

for ($i=0;$i<$response->num_rows;$i++) {
    $response->data_seek($i);
    $row = $response->fetch_assoc();
echo '<div class="box">';
if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1)
    echo '<a style="float:right" href="removeMess.php?idMessage='.$row['idMessage'].'&idForum='.$_GET['idForum'].'"><i class="fa fa-close" style="font-size:30px;color:red;"></i></a>';
echo '<p class="pseudo"><a href="profil.php?idUser='.$row['idUser'].'&Pseudo='.$row['Pseudo'].'">'.$row['Pseudo'].' :</a></p> <p class="date">'.$row['Date'].'</p>
    <p class="message">'.$row['Text'].'<p>
</div>';
}

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Forum</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="ressources/de.png">
    <link rel="stylesheet" type="text/css" href="css/forum.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/chat.css">
    <?php include 'global.php' ?>
</head>


<body onload="load()">


    <?php include 'header.php';
    if (!isset($_GET['idForum'])) {
        header('Location: forum.php');
    }
    $mysqli = new mysqli("localhost", "root", "1234", "AntreBD");
    if ($mysqli->connect_errno) {
        echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $sql= "SELECT Forum.idForum,Subject,Date FROM Forum
    WHERE Forum.idForum=".$_GET['idForum']."";
    $response = $mysqli->query($sql);
    $response->data_seek(0);
    $row = $response->fetch_assoc();
    $title=$row['Subject'];
    $date=$row['Date'];?>
    <div id="forum">

        <h3>[<?= $date ?>] <?= $title ?></h3>
        <div class="sujets">
            <div id="chatBloc">
                <?php include 'listMessage.php' ?>
            </div>
        </div>


        <form id="send" class="sujets">
            <div class="messBlock">
                <textarea id="inputText" type="text" name="Message" value="" class="inputText" placeholder="Saisissez votre message..."></textarea>
                <?php if(!isset($_SESSION['isConnected']) || $_SESSION['isConnected']==0):?>
                    <a href="connexion.php"><div class="btn-12">
                        Connexion
                    </div></a>
                <?php else: ?>
                    <input id="js-send" class="btn-12" value="Envoyer"/>
                <?php endif; ?>
            </div>
        </form>
    </div>


    <?php include 'footer.php' ?>

        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/chat.js"></script>
</body>

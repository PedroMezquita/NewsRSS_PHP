<!DOCTYPE html>
<html>
<head>
    <title>
        Flux RSS
    </title>
</head>
<body>
<form method="get" action="vues/vueFlux.php">
    <button> RSS </button>
</form>
<h1>
    LISTE DE NEWS
</h1>
<?php

$dsn = 'mysql:host=localhost;dbname=news'; //A mettre le serveur de base de données qui nous interesse, dans mon cas mysql:host=berlin.iut.local;dbname=dbpemezquita
$username = 'root'; //nom de l'utilisateur
$password = 'root'; //mot de passe de l'utilisateur

include_once("controleur/Connection.php");
include_once("controleur/NewsGateway.php");
include_once("modeles/News.php");
include_once("config/Validation.php");

$TMessage = [];
try{
    $ngw = new NewsGateway(new Connection($dsn, $username, $password));


    $AllNews = $ngw->selectAll();
    if ($AllNews[0] == NULL){
        $TMessage = ["Vous n'avez aucune News actuellement"];
    }
    else{
        echo "<table><thread><th>Titre</th><th>Date</th><th>Description</th><th>Link</th></thread></tr><tbody>";
        foreach ($AllNews as $new){
            $titre = $new->getTitre();
            $date = $new->getDate();
            $description = $new->getDescription();
            $link = $new->getLink();
            echo "<tr><td><a href='$link'>$titre</a></td><td>$date</td><td>$description</td><td>$link</td></tr>";
        }
        echo "</tbody></table>";
    }

    } catch(PDOException $e){
        $TMessage = [$e->errorInfo];
    }
    require('vues/erreur.php');

/*
try {
    $ngw = new NewsGateway(new Connection($dsn, $username, $password));
    $NewNew = new News(NULL, "Auto", "articleAuto", "refAuto", "Signe:La machine");

    $ngw->insert($NewNew);
} catch (PDOException $e){
    echo $e->getMessage();
}
*/

?>
</body>
</html>

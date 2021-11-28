<!DOCTYPE html>
<html>
<head>
    <title>
        Liste De Flux
    </title>
</head>
<body>
    <form method="get" action="">
        <button> Ajouter RSS </button>
    </form>
    <h1>
        LISTE DE FLUX RSS
    </h1>
<?php
$dsn = 'mysql:host=localhost;dbname=news'; //A mettre le serveur de base de données qui nous interesse, dans mon cas mysql:host=berlin.iut.local;dbname=dbpemezquita
$username = 'root'; //nom de l'utilisateur
$password = 'root'; //mot de passe de l'utilisateur

include_once("../controleur/Connection.php");
include_once("../controleur/FluxGateway.php");
include_once("../modeles/Flux.php");
include_once("../config/Validation.php");

$TMessage = [];
try{
    $ngw = new FluxGateway(new Connection($dsn, $username, $password));


    $AllFlux = $ngw->selectAll();
    if ($AllFlux[0] == NULL){
        $TMessage = ["Vous n'avez aucun flux RSS actuellement"];
    }
    else{

        echo "<table><thread><th>Titre</th><th>Date</th><th>Description</th><th>Link</th></thread></tr><tbody>";
        foreach ($AllFlux as $new){
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
require('erreur.php');
?>



</body>
</html>


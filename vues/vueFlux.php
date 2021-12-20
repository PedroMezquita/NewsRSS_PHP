<?php
global $rep, $vues;
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Liste De Flux
    </title>
</head>
<body>
    <form method="post" action="index.php?action=VueAjoutFlux">
        <button> Ajouter RSS </button>
    </form>
    <form method="post" action="index.php?action=">
        <button> Retour </button>
    </form>
    <h1>
        LISTE DE FLUX RSS
    </h1>
<?php
    if (isset($tabFlux)) {
        echo "<table><thread><th>Titre</th>><th>Supprimmer</th></thread></tr><tbody>";
        foreach ($tabFlux as $flux){
            $titre = $flux->getTitre();
            echo "<tr><td>$titre</td><td><form method='post' action='index.php?action=SupprimmerFlux&flux=$titre'><button>X</button></form></td></tr>";
        }
        echo "</tbody></table>";
    }


/*

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
            $date = $new->getPubDate();
            $description = $new->getDescription();
            $link = $new->getLink();
            echo "<tr><td><a href='$link'>$titre</a></td><td>$date</td><td>$description</td><td>$link</td></tr>";
        }
        echo "</tbody></table>";
    }

} catch(PDOException $e){
    $TMessage = [$e];
}
require('erreur.php');

*/
?>


</body>
</html>

<?php
global $rep, $vues, $TMessage;
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Liste De Flux
    </title>
</head>
<body>
    <form method="post" action="index.php?action=VueFlux">
        <button> Voir flux RSS </button>
    </form>
    <form method="post" action="index.php?action=VueLogin">
        <button> Login </button>
    </form>


    <h1>
        LISTE DE NEWS
</h1>
<?php

    if (isset($news)){

        echo "<table><thread><th>Titre</th><th>Date</th><th>Description</th><th>Link</th></thread></tr><tbody>";
        foreach ($news as $new){
            $titre = $new->getTitre();
            $date = $new->getDate();
            $description = $new->getDescription();
            $link = $new->getLink();
            echo "<tr><td><a href='$link'>$titre</a></td><td>$date</td><td>$description</td><td>$link</td></tr>";
        }
        echo "</tbody></table>";

    }

/*
try{
    $ngw = new NewsGateway(new Connection($base, $user, $mdp));


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
        $TMessage = [$e];
    }
    require('vues/erreur.php');




lien premiere page




SimpleXMLElement: url, bool -> true
recuperer les flux en base
for flux, parser le flux et ajouter des news
new avec url + boolean a true
sumpexml examples doc php
*/
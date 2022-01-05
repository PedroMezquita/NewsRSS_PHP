<?php
global $rep, $vues, $TMessage;
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Liste De Flux
    </title>
    <!-- <link rel="stylesheet" type="text/css" href="style/css/table.css"> -->
</head>
<body>
    <form method="post" action="index.php?action=VueFlux">
        <button> Voir flux RSS </button>
    </form>
    <form method="post" action="index.php?action=VueLogin">
        <button> Login </button>
    </form>
    <form method="post" action="index.php?action=VueAjoutFlux">
        <button> Mettre a jour flux RSS </button>
    </form>


    <h1>
        LISTE DE NEWS
</h1>
<?php
    if(isset($_SESSION['sessionUser'])){
        echo "    <form method='post' action='index.php?action=Deconnecter'>
        <button> Se Deconnecter </button>
    </form>";
    }


    if (isset($news)){

        echo "<div class='container'><div class='tWrap'><div class='tWrap__head'><table border='2'><thread><th>Titre</th><th>Date</th><th>Description</th><th>Link</th></thread></tr><tbody>";
        foreach ($news as $new){
            $titre = $new->getTitre();
            $date = $new->getDate();
            $description = $new->getDescription();
            $link = $new->getLink();
            echo "<tr><td><a href='$link'>$titre</a></td><td>$date</td><td>$description</td><td>$link</td></tr>";
        }
        echo "</tbody></table></div></div></div>";

        $max = $max+10;
        $min = $min-10;
        echo "
    <form method='post' action='index.php?action=&min=$min'>
        <button> Page Anterieure </button>
    </form>";

    echo "
    <form method='post' action='index.php?action=&max=$max'>
        <button> Prochaine page </button>
    </form>";
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

<?php

require_once(__DIR__."/config/config.php");

include_once(__DIR__."/config/Autoload.php");
Autoload::charger();



$control = new FrontController();

/*
$TMessage = [];
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

try {
    $ngw = new NewsGateway(new Connection($dsn, $username, $password));
    $NewNew = new News(NULL, "Auto", "articleAuto", "refAuto", "Signe:La machine");

    $ngw->insert($NewNew);
} catch (PDOException $e){
    echo $e->getMessage();
}
*/

/*
Notes:

Ne pas mettre header Location
Vues: pas d'appel aux modeles, ni aux gateway, affichage avec isset.


*/

?>
</body>
</html>




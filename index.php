<<<<<<< HEAD
<?php

require_once(__DIR__."/config/config.php");

include_once(__DIR__."/config/Autoload.php");
Autoload::charger();



$control = new Controleur();

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

?>
</body>
</html>
=======
<?php

require_once(__DIR__."/config/config.php");

include_once(__DIR__."/config/Autoload.php");
Autoload::charger();

$control = new Controleur();

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

?>
</body>
</html>
>>>>>>> 4c9000e10aaa2385e2dfaf0b8615525c4838226c

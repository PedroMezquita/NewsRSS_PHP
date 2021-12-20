
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Flux</title>
</head>
<body>
<form action=./vueLogin.php?form="1" method="post">
    <input type="text" name="pseudo" />
    <input type="password" name="mdp" />
    <input type="password" name="mdp2" />
    <div>
        <button type="submit">Envoyer</button>
    </div>
</form>
<form method="post" action="index.php?action=">
    <button> Retour </button>
</form>

<?php
    if (isset($_REQUEST['form'])){
    /*
        try{

            $ngw = new FluxGateway(new Connection($base, $user, $mdp));

            $i = $ngw->insert($_REQUEST['titre'], $_REQUEST['description'], $_REQUEST['link'], $_REQUEST['date'], $_REQUEST['lang']);
            echo "Succes d'ajout SSL";
        }
        catch (PDOException $e){
            echo "Erreur SQL";
        }
    */



    }
?>

</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Flux</title>
</head>
<body>
<form action=./ajoutFlux.php?form="1" method="post">
    <input type="text" name="titre" />
    <input type="date" name="date" />
    <input type="text" name="description" />
    <input type="text" name="link" />
    <input type="text" name="lang">
    <div>
        <button type="submit">Envoyer</button>
    </div>
</form>
<?php
    if (isset($_REQUEST['form'])){
        $dsn = 'mysql:host=localhost;dbname=news'; //A mettre le serveur de base de données qui nous interesse, dans mon cas mysql:host=berlin.iut.local;dbname=dbpemezquita
        $username = 'root'; //nom de l'utilisateur
        $password = 'root'; //mot de passe de l'utilisateur
        include_once("../controleur/FluxGateway.php");
        include_once("../controleur/Connection.php");
        try{

            $ngw = new FluxGateway(new Connection($dsn, $username, $password));

            $i = $ngw->insert($_REQUEST['titre'], $_REQUEST['description'], $_REQUEST['link'], $_REQUEST['date'], $_REQUEST['lang']);
            echo "Succes d'ajout SSL";
        }
        catch (PDOException $e){
            echo "Erreur SQL";
        }
    }
?>

</body>

</html>
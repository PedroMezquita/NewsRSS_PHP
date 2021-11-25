<?php

$dsn = 'mysql:host=localhost;dbname=news'; //A mettre le serveur de base de données qui nous interesse, dans mon cas mysql:host=berlin.iut.local;dbname=dbpemezquita
$username = 'root'; //nom de l'utilisateur
$password = 'root'; //mot de passe de l'utilisateur

include_once("controleur/Connection.php");
include_once("controleur/NewsGateway.php");
include_once("modeles/News.php");
try {
    $ngw = new NewsGateway(new Connection($dsn, $username, $password));
    $NewNew = new News(NULL, "Auto", "articleAuto", "refAuto", "Signe:La machine");

    $ngw->insert($NewNew);
} catch (PDOException $e){
    echo $e->getMessage();
}
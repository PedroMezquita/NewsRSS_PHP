<?php

$dsn = 'mysql:host=berlin.iut.local;dbname=dbpemezquita'; //A mettre le serveur de base de données qui nous interesse, dans mon cas mysql:host=berlin.iut.local;dbname=dbpemezquita
$username = 'pemezquita'; //nom de l'utilisateur
$password = 'achanger'; //mot de passe de l'utilisateur

include_once("controleur/Connection.php");
include_once("controleur/NewsGateway.php");
include_once("modeles/News.php");
include_once("config/Validation.php");


try{
    $ngw = new NewsGateway(new Connection($dsn, $username, $password));
    $titre = Validation::CleanString($_POST['titre']);



    echo "$titre <br> $titre";


    $AllNews = $ngw->selectAll();
    echo "<h1> $AllNews </h1>";

} catch(PDOException $e){
    echo $e->getMessage();
}

/*
try {
    $ngw = new NewsGateway(new Connection($dsn, $username, $password));
    $NewNew = new News(NULL, "Auto", "articleAuto", "refAuto", "Signe:La machine");

    $ngw->insert($NewNew);
} catch (PDOException $e){
    echo $e->getMessage();
}
*/
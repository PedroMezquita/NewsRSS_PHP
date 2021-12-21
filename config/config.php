<?php

$rep = __DIR__.'/../';
/*
$base = 'mysql:host=berlin.iut.local;dbname=dbpemezquita';//A mettre le serveur de base de données qui nous interesse, dans mon cas mysql:host=berlin.iut.local;dbname=dbpemezquita
$user = 'pemezquita';
$mdp = 'achanger';
*/
$base = 'mysql:host=localhost;dbname=news';
$user = 'root';
$mdp = 'root';

$vues['erreur']='vues/erreur.php';
$vues['ajoutFlux']='vues/ajoutFlux.php';
$vues['vueFlux']='vues/vueFlux.php';
$vues['vueNews']='vues/vueNews.php';
$vues['vueLogin']='vues/vueLogin.php';
$vues['vueRegister']='vues/vueRegister.php';

$vues['index']='index.php';
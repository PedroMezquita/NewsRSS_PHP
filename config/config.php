<?php

$rep = __DIR__.'/../'; //repertoire racine

$base = 'mysql:host=berlin.iut.local;dbname=dbpemezquita'; //nom de la bdd
$user = 'pemezquita'; //pseudo
$mdp = 'achanger'; //mdp (logiquement ceci n'est pas mon mdp privé)

//differentes vues de la page web

$vues['erreur']='vues/erreur.php';
$vues['parser']='vues/vueParser.php';
$vues['vueFlux']='vues/vueFlux.php';
$vues['vueNews']='vues/vueNews.php';
$vues['vueLogin']='vues/vueLogin.php';
$vues['vueRegister']='vues/vueRegister.php';

$vues['index']='index.php';
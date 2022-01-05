<?php

class Parser {
    public function __construct() {
    }

    public function parser(string $lien) {
        $id = 0;
        //site recomendé pour test: https://www.eurogamer.net/?format=rss
        $flux = new SimpleXMLElement($lien, 0, true, "", false);
        $AllNews = array();


        $FluxTitre = $flux->channel->title;
        $FluxLink = $flux->channel->link;
        $FluxDescription = $flux->channel->description;
        $FluxLang = $flux->channel->language;


        foreach ($flux->channel->item as $news) {
            $titre = $news->title;
            $description = $news->description;
            $link = $news->link;
            $date = $news->pubDate;
            $time = strtotime($date);
            $date = date("Y-m-d", $time);
            $new = new News($id, $titre,$date,$description,$link);
            array_push($AllNews,$new);
            $id++;
        }

        $AllFlux = array("FluxTitre" => $FluxTitre, "FluxLink" => $FluxLink, "FluxDescription" => $FluxDescription, "FluxLang" => $FluxLang, "AllNews" => $AllNews);
        return $AllFlux;



    }





}















/*
global $rep, $vues;
include($rep."rss.php");

$news = new SimpleXMLElement($xmlstr);

$titre = $news->channel->title;
$link = $news->channel->link;
$description = $news->channel->description;
$lang = $news->channel->language;


$url = 'index?action=AjouterFlux';
$data = array('key1' => $titre, 'key2' => 'value2', 'key2' => 'value2', 'key2' => 'value2', 'key2' => 'value2', 'key2' => 'value2');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ /*}




// echo "<tr><td>$titre</td><td><form method='post' action='index.php?action=AjouterFlux&titre=$titre&link=$link&description=$description&lang=$lang'><button>Ajouter Flux</button></form></td></tr>";




//var_dump($news);

//echo $news->title;
*/
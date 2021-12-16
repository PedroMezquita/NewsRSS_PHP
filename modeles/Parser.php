<?php
global $rep;
include($rep."rss.php");

$news = new SimpleXMLElement($xmlstr);

foreach ($news->item as $flux){
    echo "Titre: ".$flux->title;
}

<?php
global $rep;
include($rep."rss.php");

$news = new SimpleXMLElement($xmlstr);

var_dump($news);

echo $news->title;
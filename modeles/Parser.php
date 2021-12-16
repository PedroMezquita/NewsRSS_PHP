<?php
global $rep;
include($rep."rss.php");

$news = new SimpleXMLElement($xmlstr);


echo $news->item;
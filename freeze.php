<?php

$currentmap = file_get_contents("data/currentMap.txt");
$frozen = file_get_contents("frozen.html");

copy("index.html","unfrozen.html");

$frozentop = explode("<!--<datadiv>-->",$frozen)[0];
$frozenbottom = explode("<!--</datadiv>-->",$frozen)[1];

$indexout = $frozentop."\n<div id = \"datadiv\" style = \"display:none\">\n".$currentmap."\n</div>\n".$frozenbottom;

file_put_contents("index.html",$indexout);


?>
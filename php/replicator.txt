<?php


$dnaurl = "https://raw.githubusercontent.com/LafeLabs/mapfactory5/master/data/dna.txt";
$baseurl = explode("data/",$dnaurl)[0];
$dnaraw = file_get_contents($dnaurl);
$dna = json_decode($dnaraw);

mkdir("jscode");
mkdir("iconsymbols");
mkdir("data");
mkdir("php");
mkdir("uploadimages");
mkdir("symbols");
mkdir("symbol");
    
copy($baseurl."https://raw.githubusercontent.com/LafeLabs/geometron5/master/php/replicator.txt","symbol/replicator.php");

$oldmapexists = false;
if(file_exists("data/currentMap.txt")){
    $currentMap = file_get_contents("data/currentMap.txt");
    $oldmapexists = true;
}

$oldscrollexists = false;
if(file_exists("README.md")){
    $README = file_get_contents("README.md");
    $oldscrollexists = true;
}

foreach($dna->html as $value){
    copy($baseurl.$value,$value);
}

foreach($dna->javascript as $value){
    copy($baseurl."jscode/".$value,"jscode/".$value);
}

foreach($dna->iconsymbols as $value){
    copy($baseurl."iconsymbols/".$value,"iconsymbols/".$value);
}

foreach($dna->symbols as $value){
    copy($baseurl."symbols/".$value,"symbols/".$value);
}


foreach($dna->data as $value){
    
    copy($baseurl."data/".$value,"data/".$value);
    
}

foreach($dna->php as $value){
    copy($baseurl."php/".$value,"php/".$value);
    copy($baseurl."php/".$value,explode(".",$value)[0].".php");
}

if($oldmapexists){
    file_put_contents("data/currentMap.txt",$currentMap);
}

if($oldscrollexists){
    file_put_contents("README.md",$README);
}

?>
<a href = "index.html">CLICK TO GO TO MAP</a>
<style>
a{
    font-size:3em;
}
</style>

<?php

$branchname = $_GET["filename"];//get url


$files = scandir(getcwd()."/".$branchname);
$jsfiles = scandir(getcwd()."/".$branchname."/jscode");
$iconfiles = scandir(getcwd()."/".$branchname."/iconsymbols");
$phpfiles = scandir(getcwd()."/".$branchname."/php");
$datafiles = scandir(getcwd()."/".$branchname."/data");
$uploadfiles = scandir(getcwd()."/".$branchname."/uploadimages");
$symbolfiles = scandir(getcwd()."/".$branchname."/symbols");


foreach($jsfiles as $value){
    unlink($branchname."/jscode/".$value);
}
rmdir($branchname."/jscode");

foreach($iconfiles as $value){
    unlink($branchname."/iconsymbols/".$value);
}
rmdir($branchname."/iconsymbols");

foreach($phpfiles as $value){
    unlink($branchname."/php/".$value);
}
rmdir($branchname."/php");

foreach($datafiles as $value){
    unlink($branchname."/data/".$value);
}
rmdir($branchname."/data");

foreach($uploadfiles as $value){
    unlink($branchname."/uploadimages/".$value);
}
rmdir($branchname."/uploadimages");

foreach($symbolfiles as $value){
    unlink($branchname."/symbols/".$value);
}
rmdir($branchname."/symbols");



foreach($files as $value){
    unlink($branchname."/".$value);
}

rmdir($branchname);


?>
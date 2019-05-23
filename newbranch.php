<?php

$branchname = $_GET["filename"];//get url
mkdir($branchname);
mkdir($branchname."/jscode");
mkdir($branchname."/iconsymbols");
mkdir($branchname."/data");
mkdir($branchname."/php");
mkdir($branchname."/uploadimages");
mkdir($branchname."/symbols");

$files = scandir(getcwd());
$jsfiles = scandir(getcwd()."/jscode");
$iconfiles = scandir(getcwd()."/iconsymbols");
$phpfiles = scandir(getcwd()."/php");
$datafiles = scandir(getcwd()."/data");
$symbolfiles = scandir(getcwd()."/symbols");

$htmlfiles = [];
foreach($files as $value){
    if(substr($value,-5) == ".html" || substr($value,-3) == ".md"){
        array_push($htmlfiles,$value);
    }
}

foreach($htmlfiles as $value){
    copy($value,$branchname."/".$value);
}

foreach($jsfiles as $value){
    if($value{0} != "."){
        copy("jscode/".$value,$branchname."/jscode/".$value);
    }
}

foreach($iconfiles as $value){
    if($value{0} != "."){
        copy("iconsymbols/".$value,$branchname."/iconsymbols/".$value);
    }
}

foreach($symbolfiles as $value){
    if($value{0} != "."){
        copy("symbols/".$value,$branchname."/symbols/".$value);
    }
}

foreach($datafiles as $value){
    if($value{0} != "."){
        copy("data/".$value,$branchname."/data/".$value);
    }
}


foreach($phpfiles as $value){
  if($value{0} != "."){
    copy("php/".$value,$branchname."/php/".$value);
  }
}
foreach($phpfiles as $value){
  if($value{0} != "."){
    copy("php/".$value,$branchname."/".explode(".",$value)[0].".php");
  }
}

?>
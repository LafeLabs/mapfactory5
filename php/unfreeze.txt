<?php

$index = file_get_contents("index.html");

if(substr($index,0,15) == "<!--<frozen>-->"){

  copy("unfrozen.html","index.html");

}

?>
<a href = "index.html">Back to map</a>
<style>
a{
    font-size:3em;
}
</style>
<?php
//mksymbol.php?dir=[dirname]

$dirname = $_GET["dir"];//get dir

mkdir($dirname);

copy("https://raw.githubusercontent.com/LafeLabs/geometron5/master/php/replicator.txt",$dirname."/replicator.php");

echo "<a href = \"".$dirname."/replicator.php\">".$dirname."/replicator.php</a>";

?>
<style>
    a{
        font-size:3em;
    }
</style>
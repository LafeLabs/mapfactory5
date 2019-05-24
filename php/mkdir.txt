<?php
//mkdir.php?dir=[dirname]

$dirname = $_GET["dir"];//get dir

mkdir($dirname);

copy("replicator.php",$dirname."/replicator.php");

echo "<a href = \"$dirname\">".$dirname."</a>"
?>
<style>
    a{
        font-size:3em;
    }
</style>
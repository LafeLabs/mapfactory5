<a href = "index.html">back to main</a>
<ul>
<?php

// list directories as links


$files = scandir(getcwd());

foreach($files as $value){
    if($value{0} != "." && is_dir($value) && $value != "php" && $value != "jscode" && $value != "data" && $value != "html" && $value != "symbols" && $value != "fonts" && $value != "icons" && $value != "iconsymbols" && $value != "uploadimages"){
                
        echo "\n<li><a href = \"".$value."/\">".$value."/</a></li>\n";
        
    }
}


?>
</ul>
<style>
    body{
        font-size:2em;
    }
</style>
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Shyam Yadav";
fwrite($myfile, $txt);

fclose($myfile);
?>
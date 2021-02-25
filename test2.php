<?php
$content = "{'x': 'fish'}";
$fp = fopen("data.json","w");
fwrite($fp,$content);
fclose($fp);


// $myfile = fopen("data.json", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("data.json"));
// fclose($myfile);
?>

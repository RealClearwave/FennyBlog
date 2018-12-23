<?php
$pas_name = "pages\\" . $_GET["page"] . ".txt";
//echo $pas_name;
$file=fopen($pas_name,"r") or exit("Bad File!" . $pas_name);
while(!feof($file))
{
    echo fgets($file). "<br>";
}
fclose($file);
?>
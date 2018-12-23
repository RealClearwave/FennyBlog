<?php
$pas_name = "pages\\" . $_GET["page"] . ".txt";
//echo $pas_name;
echo "<html>";
echo "<head>";
echo "<title>" . $pas_name . "</title>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">";
echo "</head>";
echo "<body>";
$file=fopen($pas_name,"r") or exit("Bad File!" . $pas_name);
while(!feof($file))
{
    echo fgets($file). "<br>";
}
fclose($file);
echo "</body>";
?>
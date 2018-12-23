<?php
/**
 * Created by PhpStorm.
 * User: smduc
 * Date: 2018/12/23
 * Time: 15:55
 */

require "admin/update.php";
update(dirname(__FILE__));
$pas_name = "config/content-list.txt";
$file=fopen($pas_name,"r") or exit("Bad File!" . $pas_name);
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\"></link>";
echo "<h1>Content List:</h1>";
while (!feof($file)){
    //echo  fgets($file) . "<br>" . fgets($file);
    echo "<a href=\"" . fgets($file) . "\">" . fgets($file) ."</a><br>";
}
fclose($file);

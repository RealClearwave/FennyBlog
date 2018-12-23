<?php
/**
 * Created by PhpStorm.
 * User: smduc
 * Date: 2018/12/23
 * Time: 12:24
 */

require "update.php";
require "Parsedown.php";

$psd = new Parsedown();
$w_into = $_POST["tlc"];
$jmp = "read.php?page=" . $_POST["wr2"];
$pas_name = "../pages/" . $_POST["wr2"] . ".txt";
echo $pas_name;
$file=fopen($pas_name,"w+") or exit("Bad File!" . $pas_name);
echo "<br> " . fwrite($file,$psd->text($w_into));
fclose($file);

chdir("..");
update(dirname(__FILE__));
echo "<a href=\"/" . $jmp ."\">Here</a>";
?>
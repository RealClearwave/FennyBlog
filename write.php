<?php
/**
 * Created by PhpStorm.
 * User: smduc
 * Date: 2018/12/23
 * Time: 12:24
 */
require "Parsedown.php";
$psd = new Parsedown();
$w_into = $_POST["tlc"];
$jmp = "read.php\\read.php?page=" . $_POST["wr2"];
$pas_name = "pages\\" . $_POST["wr2"] . ".txt";
echo $pas_name;
$file = $file=fopen($pas_name,"w+") or exit("Bad File!" . $pas_name);
echo fwrite($file,$psd->text($w_into));
fclose($file);
//echo "<script>document.location = \"" . $jmp . "\"";
?>
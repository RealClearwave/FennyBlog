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
$jmp = "read.php?page=" . $_POST["wr2"];
$pas_name = "pages/" . $_POST["wr2"] . ".txt";
echo $pas_name;
$file=fopen($pas_name,"w+") or exit("Bad File!" . $pas_name);
echo "<br> " . fwrite($file,$psd->text($w_into));
fclose($file);

$f0=fopen("content-list.txt","w+") or exit("Bad File!" . $pas_name);
fwrite($f0,$jmp . "\n");
fwrite($f0,$_POST["wr2"]);
fclose($f0);
//echo "<script>document.location = \"" . $jmp . "\"";
echo "<a href=\"" . $jmp ."\"</a>";
?>
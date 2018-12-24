<?php
/**
 * Created by PhpStorm.
 * User: smduc
 * Date: 2018/12/23
 * Time: 15:55
 */

require "admin/update.php";
require "var/ui_frames.php";

update(dirname(__FILE__));

$pas_name = "config/content-list.txt";
$file=fopen($pas_name,"r") or exit("Bad File!" . $pas_name);
echo "<title>" . sitename . "</title>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"usr/style.css\"></link>";
echo "<h1>" . sitename . "</h1>";
list_headlines();
list_pages();
fclose($file);

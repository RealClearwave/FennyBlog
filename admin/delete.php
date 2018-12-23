<?php
require "update.php";
$pas_name = "../pages/" . $_GET["page"] . ".txt";
unlink($pas_name);

chdir("..");
update(dirname(__FILE__));
echo $_GET["page"] . " deleted.";
?>
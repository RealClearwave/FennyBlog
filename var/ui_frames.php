<?php
/**
 * Created by PhpStorm.
 * User: smduc
 * Date: 2018/12/24
 * Time: 19:57
 */
require "config.php";
function list_headlines(){
    //echo dirname(__FILE__);
    $file=fopen(inst_path . "config/content-list.txt","r") or exit("Bad File!" );
    echo "<table><tr>";
    while (!feof($file)){
        //echo  fgets($file) . "<br>" . fgets($file);
        if (fgets($file) == "Headlined\n")
            echo "<td><a href=\"" . fgets($file) . "\"><strong>" . fgets($file) . "</strong></a></td>";
    }

    echo "</tr></table>";
}

function list_pages(){
    //echo dirname(__FILE__);
    $file=fopen(inst_path . "config/content-list.txt","r") or exit("Bad File!" );
    while (!feof($file)){
        //echo  fgets($file) . "<br>" . fgets($file);
        if (fgets($file) != "Headlined\n")
            echo "<a href=\"" . fgets($file) . "\">" . fgets($file) . "</a>";
    }

}
?>


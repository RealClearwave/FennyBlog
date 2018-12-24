<?php
/**
 * Created by PhpStorm.
 * User: smduc
 * Date: 2018/12/23
 * Time: 16:29
 */

function update($org_path)
{
    //echo $org_path . "\n";
    chdir("./pages");

    unlink("../config/content-list.txt");
    $file = fopen("../config/content-list.txt", "a+") or exit("Failed while opening list");
    $mdir = glob("*.txt");

    //echo count($mdir);
    //echo " files to be updated.";

    for ($i = 0; $i < count($mdir); $i++) {
        $mdir[$i] = substr($mdir[$i], 0, strlen($mdir[$i]) - 4);
        if (substr($mdir[$i],0,1) == "[")
            fwrite($file,"Headlined\n");
        else
            fwrite($file,"Common\n");

        fwrite($file, "read.php?page=" . $mdir[$i] . "\n");
        fwrite($file, $mdir[$i] . "\n");
    }

    fclose($file);
    chdir($org_path);
}

//update(0);
?>


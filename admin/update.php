<?php
/**
 * Created by PhpStorm.
 * User: smduc
 * Date: 2018/12/23
 * Time: 16:29
 */

$file = fopen("content-list.txt","x+") or exit("Failed while opening list");
$map = array();
$mdir = glob(".txt");
//clear Unavailable

while (!feof($file)){
    $link = fgets($file);
    $name = fgets($file);

    array_push($map,$name=>"True");
}

for ($i = 0;$i < count($mdir);$i++){
    $mdir[$i] = substr($midr,0,strlen($mdir[$i])-3);
}
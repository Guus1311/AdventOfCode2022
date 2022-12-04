<?php

function getInputLines($filename){
    $file = fopen($filename, "r") or die("unable to open file");
    $strings = array();
    while(!feof($file)){
    array_push($strings,fgets($file));
    }
    fclose($file);
    return $strings;
}
<?php
$file = fopen("opdracht1.txt", "r") or die("unable to open file");
$strings = array();
while(!feof($file)){
array_push($strings,fgets($file));
}
fclose($file);
print_r($strings);
$sums = array();
$i = 0;
$sums[$i] = 0;
foreach ($strings as $string){
if($string == "\n"){
    $i++;
    $sums[$i] = 0;
}else{$sums[$i] += intval($string);}
}
print(max($sums));
sort($sums);
print_r($sums);
$end = array_key_last($sums);
$sumsum = $sums[$end];
$sumsum += $sums[$end - 1];
$sumsum += $sums[$end - 2];
print($sumsum);


<?php
include "../functions.php";
$file = fopen("input.txt", "r");
$inputstack = array();
for($i = 0; $i < 9; $i++){
array_push($inputstack, fgets($file));
}
print_r($inputstack);
$stacks = array();
for($i = 1; $i < 34; $i=$i+4){
    $singlestack = array();
    for($j = 7; $j >= 0; $j--){
        if($inputstack[$j][$i] != ' ' && $inputstack[$j][$i] != '[' && $inputstack[$j][$i] != ']'){
       array_push($singlestack, $inputstack[$j][$i]);
        }
    }
   // print_r($singlestack);
    array_push($stacks,$singlestack);
}
print_r($stacks);
fgets($file);
$instructions = array();
while(!feof($file)){
    $line = fgets($file);
    $words = explode(" ",$line);
    foreach($words as $word){
        if($word != "move" && $word != "from" && $word != "to"){
            array_push($instructions, intval($word));
        }
    }
}
print_r($instructions);
for($i = 0; $i < 1506; $i=$i+3){
    $fromstack = $stacks[$instructions[$i+1]-1];
    $tostack = $stacks[$instructions[$i+2]-1];
    //print_r($fromstack);
    //print_r($tostack);
    $tempstack = array();
    for($j = 0;$j < $instructions[$i];$j++){
        $tempstack[] = end($fromstack);
    array_pop($fromstack);
    }
    for($j = 0;$j < $instructions[$i];$j++){
     $tostack[] = end($tempstack);
    array_pop($tempstack);
    }
    $stacks[$instructions[$i+1]-1] = $fromstack;
    $stacks[$instructions[$i+2]-1] = $tostack;


}
//print_r($stacks);
print("eind\n");
foreach($stacks as $stack){
    print(end($stack));
}
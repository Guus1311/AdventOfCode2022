<?php
include "../functions.php";
$lines = getInputLines("input.txt");
$halves = array();
foreach($lines as $line){
    array_push($halves, explode(",",$line));
}
print_r($halves);
$splithalves = array();
foreach($halves as $half){
   $quarts = array();
    array_push($quarts, explode("-",$half[0]));
    array_push($quarts, explode("-",$half[1]));
    array_push($splithalves, $quarts);
}
print_r($splithalves);
$matches = 0;
foreach($splithalves as $splithalf){
    print_r($splithalf);
    if((intval(($splithalf[1][0]) >= intval($splithalf[0][0]) && intval($splithalf[1][0]) <= intval($splithalf[0][1])) ||
    (intval($splithalf[1][1]) >= intval($splithalf[0][0]) && intval($splithalf[1][1]) <= intval($splithalf[0][1]))) ||
    (intval(($splithalf[0][0]) >= intval($splithalf[1][0]) && intval($splithalf[0][0]) <= intval($splithalf[1][1])) ||
    (intval($splithalf[0][1]) >= intval($splithalf[1][0]) && intval($splithalf[0][1]) <= intval($splithalf[1][1])))){
        $matches++;
        print("overlap\n");
    }
}
print($matches);
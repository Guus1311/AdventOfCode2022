<?php
$input = file_get_contents("input.txt");
print($input);
//print_r($letter);
$checklength = 4;
$i = $checklength-1;
$found = false;
while($i < strlen($input) && $found == false){
    $found = true;
    $pastchar = array();
    for($j = 0; $j < $checklength; $j++){
        array_push($pastchar, $input[$i-$j]);
    }
    for($k = 0; $k < $checklength; $k++){
        for($l = 0; $l < $checklength; $l++){
        if($k != $l){
            if($pastchar[$k] == $pastchar[$l]){
                $found = false;
            }
        }
        }    
    }        
    $i++;
}
    

print($i);
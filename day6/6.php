<?php
$input = file_get_contents("input.txt");
print($input);
//print_r($letter);
$i = 13;
$found = false;
while($i < strlen($input) && $found == false){
    $found = true;
    $past14 = array();
    for($j = 0; $j < 14; $j++){
        array_push($past14, $input[$i-$j]);
    }
    for($k = 0; $k < 14; $k++){
        for($l = 0; $l < 14; $l++){
        if($k != $l){
            if($past14[$k] == $past14[$l]){
                $found = false;
            }
        }
        }    
    }        
    $i++;
}
    

print($i);
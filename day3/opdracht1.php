<?php
$file = fopen("input.txt", "r");
$lines = array();
while(!feof($file)){
    array_push($lines, fgets($file));
}
//print_r($lines);
$som = 0;
$match = false;
foreach($lines as $number => $line){
  $halves =  str_split($line, round(strlen($line) / 2,0,PHP_ROUND_HALF_DOWN));
  print_r($halves);
  for($i = 0; $i < strlen($halves[0]); $i++){
    for($j = 0; $j < strlen($halves[1]);$j++){
        if(ord($halves[0][$i]) == ord($halves[1][$j])){
            $letter = $halves[0][$i];
            $match = true;
            print($number . " ". $halves[0][$i].$halves[1][$j].$letter . " ".ord($letter)." ");
            
            if(ctype_upper($letter)){
                print("upper ");
                $prioriteit = intval(ord($letter) - ord('A') + 27);
                $som += $prioriteit;
                print($prioriteit ."\n");
                
            }else{
                print("lower ");
                $prioriteit = intval(ord($letter) - ord('a') + 1);
                $som += $prioriteit;
                print($prioriteit ."\n");
            }
            if($match == true){break;}
        }
        if($match == true){break;}
    }
    if($match == true){break;}
  }
  $match = false;
}

print($som);

<?php
$file = fopen("input.txt", "r");
$som = 0;
while(!feof($file)){
    $match = false;
    $lines = array();
    for($i = 0; $i < 3; $i++){
        array_push($lines, fgets($file));
    }
    print_r($lines);
    for($i = 0; $i < strlen($lines[0]); $i++){
        for($j = 0; $j < strlen($lines[1]); $j++){
            for($k = 0; $k < strlen($lines[2]); $k++){
                if(ord($lines[0][$i]) == ord($lines[1][$j]) && ord($lines[1][$j]) == ord($lines[2][$k])){
                    $letter = $lines[0][$i];
                    $match = true;
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
    if($match == true){break;}
}
$match = false;
}
print($som);
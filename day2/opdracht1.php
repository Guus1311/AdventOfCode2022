<?php
$file = fopen("opdracht1.txt", "r") or die("cant open file");
$i = 0;
$score = 0;
while(!feof($file)){
    $ronde = fgets($file);
    $ronde = " " . $ronde;
    //print(strpos($ronde, "A"));
    if(strpos($ronde, "X") != false){
        //print("$i");
        $score += 0;
        if(strpos($ronde, "A") != false){
            $score += 3;
        }
        if(strpos($ronde, "B") != false){
            $score += 1;
        }
        if(strpos($ronde, "C") != false){
            $score += 2;
        }
    }
    if(strpos($ronde, "Y") != false){
        //print("$i");
        $score += 3;
        if(strpos($ronde, "A") != false){
            $score += 1;
        }
        if(strpos($ronde, "B") != false){
            $score += 2;
        }
        if(strpos($ronde, "C") != false){
            $score += 3;
        }
    }
    if(strpos($ronde, "Z") != false){
        //print("$i");
        $score += 6;
        if(strpos($ronde, "A") != false){
            $score += 2;
        }
        if(strpos($ronde, "B") != false){
            $score += 3;
        }
        if(strpos($ronde, "C") != false){
            $score += 1;
        }
    }
    $i++;
}
print($score);
<?php
$file = fopen("input.txt", "r");
$inputstack = array();
for ($i = 0; $i < 9; $i++) {
    array_push($inputstack, fgets($file));
}
$stacks = array();
for ($i = 1; $i < 34; $i = $i + 4) {
    $singlestack = array();
    for ($j = 7; $j >= 0; $j--) {
        if ($inputstack[$j][$i] != ' ' && $inputstack[$j][$i] != '[' && $inputstack[$j][$i] != ']') {
            array_push($singlestack, $inputstack[$j][$i]);
        }
    }
    array_push($stacks, $singlestack);
}
fgets($file);
$instructions = array();
while (!feof($file)) {
    $line = fgets($file);
    $words = explode(" ", $line);
    foreach ($words as $word) {
        if ($word != "move" && $word != "from" && $word != "to") {
            array_push($instructions, intval($word));
        }
    }
}
//opdracht1
$stacks1 = $stacks;
for ($i = 0; $i < count($instructions); $i = $i + 3) {
    $fromstack = $stacks1[$instructions[$i + 1] - 1];
    $tostack = $stacks1[$instructions[$i + 2] - 1];

    for ($j = 0; $j < $instructions[$i]; $j++) {
        $tostack[] = end($fromstack);
        array_pop($fromstack);
    }
    $stacks1[$instructions[$i + 1] - 1] = $fromstack;
    $stacks1[$instructions[$i + 2] - 1] = $tostack;
}
print("opdracht 1: ");
foreach ($stacks1 as $stack) {
    print(end($stack));
}
print("\n");
//opdracht2
$stacks2 = $stacks;
for ($i = 0; $i < count($instructions); $i = $i + 3) {
    $fromstack = $stacks2[$instructions[$i + 1] - 1];
    $tostack = $stacks2[$instructions[$i + 2] - 1];

    $tempstack = array();
    for ($j = 0; $j < $instructions[$i]; $j++) {
        $tempstack[] = end($fromstack);
        array_pop($fromstack);
    }
    for ($j = 0; $j < $instructions[$i]; $j++) {
        $tostack[] = end($tempstack);
        array_pop($tempstack);
    }
    $stacks2[$instructions[$i + 1] - 1] = $fromstack;
    $stacks2[$instructions[$i + 2] - 1] = $tostack;
}
print("opdracht 2: ");
foreach ($stacks2 as $stack) {
    print(end($stack));
}

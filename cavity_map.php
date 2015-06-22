<?php

$__fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($__fp, "%d", $_t_cases);
$board = [];
for ($_t_i = 0; $_t_i < $_t_cases; $_t_i++) {
    $board[] = str_split(trim(preg_replace('/\s\s+/', ' ', fgets($__fp))));
}
$result = $board;
for ($i = 1; $i < $_t_cases - 1; $i++) {
    for ($j = 1; $j < count($board[$i]) - 1; $j++) {
        $mid = $board[$i][$j];
        $top = $board[$i - 1][$j];
        $right = $board[$i][$j + 1];
        $bottom = $board[$i + 1][$j];
        $left = $board[$i][$j - 1];
        if ($mid > $top && $mid > $right && $mid > $bottom && $mid > $left) {
            $result[$i][$j] = "x";
        } 
    }
    
}
foreach ($result as $outout){
    echo implode("", $outout)."\n";
}
?>
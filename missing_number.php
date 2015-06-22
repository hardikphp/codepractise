<?php

$_fp = fopen("php://stdin", "r");
$t = fgets($_fp);
for ($i = 0; $i < $t; $i++) {
    $list = split(" ", fgets($_fp));
    $diff = $list[1] - $list[0];
    $finalstring = range(min($list), max($list), $diff);
    $missing = array_values(array_diff($finalstring, $list));
    print_r($missing[0]);
}

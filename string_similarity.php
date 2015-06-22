<?php
/* Head ends here */
function stringSimilarity( $a) {
    $str_array = str_split(trim(preg_replace('/\s\s+/', ' ', $a)));
    $str_len = count($str_array);
    $count =$str_len;
    for($i=1;$i<$str_len;$i++){
        $len = $str_len-$i;
        $j =0;
        for(;$j<$len;$j++){
            if($str_array[$j]!=$str_array[$j+$i]){
                break;
            }
        }
         $count+=$j;
    }
    return $count;
}
/* Tail starts here */
$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d", $_t_cases);
for ($_t_i=0; $_t_i<$_t_cases; $_t_i++) {
    $_a = fgets($__fp);
    $res = stringSimilarity($_a);
    echo "$res\n";
}
?>
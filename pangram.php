<?php
function isPangram($text) {
    foreach (str_split($text) as $c) {
        if ($c >= 'a' && $c <= 'z')
            $bitset |= (1 << (ord($c) - ord('a')));
        else if ($c >= 'A' && $c <= 'Z')
            $bitset |= (1 << (ord($c) - ord('A')));
    }
    return $bitset == 0x3ffffff;
}    
    
$_fp = fopen("php://stdin", "r");
$t = fgets($_fp);

/* Enter your code here. Read input from STDIN. Print output to STDOUT */
for($i=0; $i<$t; $i++)
{
    $lis = split(' ', fgets($_fp));
    echo $list;die;
/*    foreach ($lis as $str)
     {
        echo isPangram($str) ? 'pangram' : 'not pangram'. '\n';
     }   */
        
} 
fclose($_fp);
?>
<?php
$_fp = fopen("php://stdin", "r");
$t = fgets($_fp);

/* Enter your code here. Read input from STDIN. Print output to STDOUT */
for($i=0; $i<$t; $i++) // test case
{
    $tn = fgets($_fp); //total number
    $list = split(' ', fgets($_fp));
    $gc =0;
    for($j=0;$j<count($list);$j++)
    {
        $n = $list[$j];
        $gc = gcd($gc,$n);
    }
    if($gc==1)
        echo "YES\n";
    else
        echo "NO\n";
    
}
function gcd($m,$n)
{
   if($m%$n==0)
      return $n;
   else
       return gcd($n,$m%$n);
   
}

fclose($_fp);

//java code

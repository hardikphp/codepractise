<?php
echo "<b>Create fibonaci algorithm</b><br/>";
// 0,1,1,2,3,5,8,13,21,34,55,89
$count =0;
$f1=0;
$f2=1;
$limit =20;
$fibo ="0,1,";

while($count < 20)
{
    $f3= $f1+$f2;
    $fibo .= $f3.",";
    $f1=$f2;
    $f2=$f3;
    $count++;
}
$fiboseries = substr($fibo,0,-1);
echo $fiboseries;
echo "<hr/>";

echo "<b>Prime number</b><br/>";
//2,3,5,7,,11,13,17,19,23,29
$num =2;
$limit =20;
$count =0;
$pnumber="";
while($count < $limit)
{
    $div_count = 0;
    for($i=1;$i<=$num;$i++)
    {
        if(($num%$i)==0)
        {
            $div_count++;
        }    
    }
    if($div_count < 3)
    {
       
        $pnumber.= $num.',';
       // die;
        $count++; 
    }
    //echo $num.':'.$count.':'.$div_count;
    
    //die;
    $num++;
}   
echo substr($pnumber,0,-1);
echo '<hr/>';
echo "<b>Piramid</b><br/>";
for($i=1;$i<=6;$i++)
{
    for($j=1;$j<$i;$j++)
    {
       echo '*'; 
    }
    echo '<br/>';
}
echo '<hr/>';
echo "<b>Reverse Piramid</b><br/>";
for($i=6;$i>1;$i--)
{
    for($j=1;$j<$i;$j++)
    {
       echo '*'; 
    }
    echo '<br/>';
}
echo '<hr/>';
echo "<b>Triangle Piramid</b><br/>";
define('NUM',7);
for($i=NUM-1;$i>=1;$i--)
{
    for($j=1;$j<=$i;$j++)
    {
       echo '&nbsp;'; 
    }
    $j--;
   // echo $j.':'.(NUM-$j);
    
    for($p=1;$p<=NUM-$j;$p++)
    {
       echo '# '; 
    }
    echo '<br/>';
}

?>
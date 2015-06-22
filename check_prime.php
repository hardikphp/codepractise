<?php

//check the prime number
function checkPrime($num)
{
	if($num==1)
    {
      return false;
    }
	if($num==2)
    {
      return true;
    }
	if($num %2 ==0)
    {
      	return false;
    }
  //logic
	for($i =3;$i<=ceil(sqrt($num));$i =$i+2)
    {
      if($num%i == 0)
      {
        return false;
      } 
    }
  	return true;
}
  

//This code read the necessary data form the standard input
while ($line = trim(fgets(STDIN))) {
  
    //$line contains the line of the input
    $count =0;
    $primeNumberSum = 0;
    $num =0; 
  
    
  for($i=0;$i<=$line;$i++)
    {  
  		$count = $num;
      
      while(true)
        
      { 
        $count++;
      
		if(checkPrime($count))
        {
          $primeNumberSum = $primeNumberSum +$num;
          $num = $count;
          break;
        }
      
    }  
      
   }
    echo $primeNumberSum . "\n";
}
?>
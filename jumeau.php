<?php
 function is_twin($str1, $str2)
 {
    $longA = strlen($str1);
    $longB = strlen($str2);
 	$row1 = str_split($str1);
 	$row2 = str_split($str2);
 	sort($row1);
 	sort($row2);

  if($longA == $longB)
 	 {
  		if(empty(array_diff($row1, $row2)))
    	{
    		echo "is twin" ;
    		return true; 
   		 }else{

    		echo "is not twin";
    		return false;
   	
 	}else{
 		echo "break";
 		return false;
 		

 	}
}
    
$a = "youssef";
$b = "sesfuoy";
echo(is_twin($a,$b));
?>

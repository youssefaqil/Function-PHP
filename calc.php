<?php

function calc($array,$n1,$n2)
 {
  $sum = 0;
  $i = 0;
  for ($n1 >= 0 ; $n1<=$n2 && $n2 < count($array); $n1++) { 
  	
  	$sum = $sum + $array[$n1];
  }
  return $sum;
}

  $array = array(0,1,5,6,4,7,10);
  echo calc($array,0,4);
?>
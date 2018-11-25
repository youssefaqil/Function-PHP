<?php

function findLargest(array $numbers) {
    

 $max1 = 0;
    for($i=0; $i<count($numbers); $i++)
    {
        if($numbers[$i] > $max1)
        {
            $max1 = $numbers[$i];
        }
      
    }
     echo "Maximum value = ".$max1; 
}


?>
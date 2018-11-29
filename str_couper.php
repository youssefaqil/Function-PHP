<?php

function chain($char)
{
   $str = array();
   $str = str_split($char);
   $char_coup = "";
   for ($i=0; $i < 7 ; $i++) { 
   	# code...
   	
   	$char_coup .= $str[$i].'*' ; 
   }

  return $char_coup;
}

$string = "youssaqil";
echo chain($string);
?>
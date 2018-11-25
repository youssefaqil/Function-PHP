<?php

$array1 = array("green", "red", "blue", "red");
$array2 = array("green", "yellow", "red");
$result = array_diff($array1, $array2);

if(empty($result))
{
   echo "ego";
}
else
{
	echo "no ego";
}
print_r($result);

?>
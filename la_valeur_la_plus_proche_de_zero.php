<?php
//fonction trie sans conservation d'association d'index
 function aksort(&$array,$valrev=false,$keyrev=false) {
  if ($valrev) { arsort($array); } else { asort($array); }
    $vals = array_count_values($array);
    $i = 0;
    foreach ($vals AS $val=>$num) {
        $first = array_splice($array,0,$i);
        $tmp = array_splice($array,0,$num);
        if ($keyrev) { krsort($tmp); } else { ksort($tmp); }
        $array = array_merge($first,$tmp,$array);
        unset($tmp);
        $i = $num;
    }
}
//La valeur la plus proche de 0 dans un tableau
function closetToZero($tableau){
 //On retourne zéro si le tableau est vide
   if(empty($tableau)){
       return 0;
   }else{
 //Si le tableau ne contient pas le chiffre 0 on l'injècte
    if(false == in_array(0, $tableau)){
        array_push($tableau, 0);
   }
  //On trie les valeurs des tableaux dans l'ordre croissant
       aksort($tableau);
   //Les clefs de 0 et des valeurs avant et après 0
       $key = array_search(0, $tableau);
       $keyPre = $key - 1;
       $keyPost = $key + 1;
       //On retourne la valeur la plus proche de 0
       if(abs($tableau[$keyPre]) < abs($tableau[$keyPost])){
      return $tableau[$keyPre];
       }else{
    return $tableau[$keyPost];
            }
         }
    }
$tableauTest = array(-8, 3, 6, -5, 14, -6, -1, -4, 25,12);
$result = closetToZero($tableauTest);
echo $result;
?>
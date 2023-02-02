<?php

function multiplication($list1, $list2){
    $multiple = 0;

    $firstData = explode(' ', $list1);  
    $secondData = explode(' ', $list2);
    
    for($i=0; $i < count($firstData); $i++){
        for ($j = 0; $j < count($secondData); $j++){
            if($i == $j){
                $multiple = $firstData[$i] * $secondData[$j];
                echo $multiple ." ";
            }
        }
    }
}
//Affichage de la  multiplication des deux listes des données 
multiplication(("20 12 5"), ("1 3 3"));

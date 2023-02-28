<?php

function roundNumber (float $number): float {  
    
    echo $number < 0 ? 'Seul les nombres positifs sont acceptés'  : '';
    $numberInt = intval($number);
    $numberFloat = $number - $numberInt;
    if($numberFloat < 0.25){
        return $numberInt;
    }else if ($numberFloat<0.75){
        return $numberInt +0.5;
    }else {
        return $numberInt + 1;
    }

}

echo roundNumber(0.1). '<br />';
echo roundNumber(1.25). '<br />';
echo roundNumber(34.77). '<br />';
echo roundNumber(-3.75). '<br />';
echo roundNumber(89). '<br />';
// echo roundNumber(rand(1,100)/10). '<br />';



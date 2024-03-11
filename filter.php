<?php
function filterNumber($str){
    $splitStr = str_split($str);
    $numberArray = [];
    $currentNumber = '';

    for($i = 0; $i < strlen($str); $i++){
        if((is_numeric($splitStr[$i]) || ($splitStr[$i] == '-'))){
            $currentNumber .= $splitStr[$i];
        } else{
            if($currentNumber !== ''){
                $numberArray[] = (int)$currentNumber;
                $currentNumber = '';
            }
        }
    }
    
    if($currentNumber !== ''){
        $numberArray[] = (int)$currentNumber;
    }

    for ($i = 0; $i < count($numberArray); $i++){
        for ($j = 0; $j < count($numberArray)-1; $j++){
            
            if($numberArray[$j] > $numberArray[$j + 1]){
                $temp = $numberArray[$j+1];
                $numberArray[$j+1] = $numberArray[$j];
                $numberArray[$j] = $temp;
            }
        }
    }

    echo "[" .implode(', ', $numberArray) ."]";
}


echo "Enter your string: ";
$str = fgets(STDIN);

$result = filterNumber($str);
?>
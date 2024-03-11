<?php
function filterNumber($str){
    $splitStr = str_split($str);
    $numberArray = [];
    $currentNumber = '';

    for($i = 0; $i < strlen($str); $i++){
        if(is_numeric($splitStr[$i])){
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
    sort($numberArray);
    echo "[" .implode(', ', $numberArray) ."]";
}


echo "Enter your string: ";
$str = fgets(STDIN);

$result = filterNumber($str);
?>
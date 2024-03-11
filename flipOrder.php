<?php
function flipper($number){
    $isNegative = $number <0;

    $number = abs($number);

    if($number < 10){
        return $number;
    }else{
        $lastDigit = $number % 10;

        $remainingDigits = (int) ($number/10);
        echo $remainingDigits;
        $reversedRemaining = flipper($remainingDigits);

        $result = (int) ($lastDigit .$reversedRemaining);
        
        return $isNegative ? -$result : $result;
    }
}


echo "Enter a number: ";
$str = fgets(STDIN);
echo flipper($str)
?>
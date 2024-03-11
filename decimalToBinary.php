<?php
function decimalToBinary($decimal) {
    $binary = '';
    
    if ($decimal < 0) {
        $decimal = abs($decimal);
        $binary = '-';
    }

    do {
        $remainder = $decimal % 2;

        $binary = $remainder . $binary;

        $decimal = intdiv($decimal, 2);
    } while ($decimal > 0);

    return $binary;
}


$decimalNumber = 5;
$binaryRepresentation = decimalToBinary($decimalNumber);

echo "Binary representation of $decimalNumber is: $binaryRepresentation";
?>

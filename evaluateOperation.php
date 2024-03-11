<?php
function numberEvaluator($numb1, $operation, $numb2){
    switch(trim($operation)){
        case '+':
            $result = $numb1 + $numb2;
            break;
        case '-':
            $result = $numb1 - $numb2;
            break;
        case '*':
            $result = $numb1 * $numb2;
            break;
        case '/':
            if($numb2 != 0){
                $result = $numb1 / $numb2;
                break;
            }
        default:
            $result = "Invalid Operation";
            break;
    }
    return $result;
}

echo "Enter the first number: ";
$numb1 = (float) fgets(STDIN);

echo "Enter the operation (+, -, *, /): ";
$operation = fgets(STDIN);

echo "Enter the second number: ";
$numb2 = (float) fgets(STDIN);

$result = numberEvaluator($numb1, $operation, $numb2);

echo "Result: " . $result;
?>

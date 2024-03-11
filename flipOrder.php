<?php
function flipper($numb){
    $reversed = '';

    for($i = strlen($numb) - 1; $i >= 0; $i--){
        $reversed .= $numb[$i];
    }
    return $reversed;
}

echo flipper("123");
?>
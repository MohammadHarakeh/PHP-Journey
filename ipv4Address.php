<?php
function ipChecker($ip){
    $split = explode('.', $ip);

    if(count($split) !== 4){
        return false;
    }

    for($i = 0; $i < 4; $i++){
        if($split[$i] === '' || !is_numeric($split[$i]) || $split[$i] <0 || $split[$i] > 255){
            return "false";
            
        }
    }
    return "True";
}

$ipAddress = "192.168.255.1";
echo ipChecker($ipAddress);
?>
<?php

function validateEmailAndPassword($email, $password) {

    $emailPattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';

    if (!preg_match($emailPattern, $email)) {
        return "Invalid email address";
    }

    if (!preg_match($passwordPattern, $password)) {
        return "Invalid password.";
    }

    return "Validation successful!";
}

    echo "Enter your email-address: ";
    $email = trim(fgets(STDIN));

    echo "Enter your password: ";
    $password = trim(fgets(STDIN));

    $result = validateEmailAndPassword($email, $password);
    echo $result;
?>

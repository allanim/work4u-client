<?php

include("_db-connect.php");
include("_func_customers.php");

$email = $_POST['email'];
$password = $_POST['password'];
$rememberMe = $_POST['rememberMe'];

// login process
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    http_response_code(404);
} else if ($email != null && $password != null) {
    if (!login($connection, $email, $password)) {
        http_response_code(401);
        echo "Invalid email or password";
    } else {
        if ($rememberMe) {
            $_COOKIE['customerEmail'] = $email;
            $_COOKIE['customerPassword'] = $password;
        }
    }
} else {
    http_response_code(403);
    echo "Please input email and password";
}

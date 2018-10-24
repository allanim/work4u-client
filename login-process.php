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
            setcookie('customerEmail', $email, time() + (86400 * 30), "/");
            setcookie('customerPassword', $password, time() + (86400 * 30), "/");
        } else {
            setcookie('customerEmail', $email, time() - 1, "/");
            setcookie('customerPassword', $password, time() - 1, "/");
        }
    }
} else {
    http_response_code(403);
    echo "Please input email and password";
}

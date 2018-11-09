<?php
include("_session.php");
include("_db-connect.php");
include("_func_customers.php");

// post job process
if (!$isLogin) {
    http_response_code(404);
} else if ($_SERVER['REQUEST_METHOD'] != "POST") {
    http_response_code(404);
} else {
    $passwords = $_POST;
    if (!updatePassword($connection, $customerId, $passwords['currentPassword'], $passwords['newPassword'])) {
        http_response_code(409);
        echo "Invalid Current password";
    } else {
        echo "Updated the password";
    }
}


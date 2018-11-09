<?php
include("_session.php");
include("_db-connect.php");
include("_func_customers.php");

// post job process
if (!$isLogin) {
    http_response_code(404);
} else if ($customerType != 1) {
    http_response_code(404);
} else if ($_SERVER['REQUEST_METHOD'] != "POST") {
    http_response_code(404);
} else {
    $customer = $_POST;
    if (!updateCustomer($connection, $customerId, $customer)) {
        http_response_code(409);
        echo "DB Error";
    } else {
        echo "Updated the profile";
    }
}


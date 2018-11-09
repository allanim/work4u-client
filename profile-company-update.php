<?php
include("_session.php");
include("_db-connect.php");
include("_func_jobs.php");

// post job process
if (!$isLogin) {
    http_response_code(404);
} else if ($customerType != 2) {
    http_response_code(404);
} else if ($_SERVER['REQUEST_METHOD'] != "POST") {
    http_response_code(404);
} else {
    $employee = $_POST;
    $employee['employeeId'] = getEmployee($connection, $customerId)['ID'];
    if (!updateEmployee($connection, $employee)) {
        http_response_code(409);
        echo "DB Error";
    } else {
        echo "Updated the profile";
    }
}


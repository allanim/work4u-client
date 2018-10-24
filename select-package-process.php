<?php
include("_session.php");
include("_db-connect.php");
include("_func_jobs.php");

// select package process
if (!$isLogin) {
    http_response_code(404);
} else if ($customerType != 2) {
    http_response_code(404);
} else if ($_SERVER['REQUEST_METHOD'] != "POST") {
    http_response_code(404);
} else {
    if (getEmployee($connection, $customerId)) {
        $employee = $_POST;
        $employee['customerId'] = $customerId;
        updateEmployeeType($connection, $customerId, $_POST['type']);
    } else {
        insertEmployeeType($connection, $customerId, $_POST['type']);
    }
}


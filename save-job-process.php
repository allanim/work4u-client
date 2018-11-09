<?php
include("_session.php");
include("_db-connect.php");
include("_func_jobs.php");

// save job process
if (!$isLogin) {
    http_response_code(404);
} else if ($customerType != 1) {
    http_response_code(404);
} else if ($_SERVER['REQUEST_METHOD'] != "POST") {
    http_response_code(404);
} else {
    $jobId = $_POST['jobId'];
    if (!saveJob($connection, $customerId, $jobId)) {
        http_response_code(409);
        echo "DB Error";
    } else {
        echo "Saved Job";
    }
}


<?php
include("_db-connect.php");
include("_func_customers.php");

// signup process
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    http_response_code(404);
} else if (signup($connection, $_POST)) {
    login($connection, $_POST['email'], $_POST['password']);
} else {
    http_response_code(409);
    echo "The email address already exists.";
}


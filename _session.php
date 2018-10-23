<?php
if (!session_id()) @ session_start();

// customer info
$isLogin = false;
$customerId = null;
$customerName = "Guest";
$customerType = 0;
if (isset($_SESSION['customerId'])) {
    $isLogin = true;
    $customerId = $_SESSION['customerId'];
    $customerName = $_SESSION['customerName'];
    $customerType = $_SESSION['customerType'];
}


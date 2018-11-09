<?php

function login($connection, $email, $password)
{
    $sql = "SELECT * FROM CUSTOMERS WHERE EMAIL = '{$email}' AND PASSWORD = '{$password}' ";
    if ($result = mysqli_query($connection, $sql)) {
        while ($row = mysqli_fetch_assoc($result)) {
            setCustomerInfo($row);
            return true;
        }
    }
    return false;
}

function setCustomerInfo($customer)
{
    if (!session_id()) @ session_start();
    if (!isset($_SESSION['customerId'])) {
        $_SESSION['customerId'] = $customer['ID'];
        $_SESSION['customerName'] = $customer['NAME'];
        $_SESSION['customerType'] = $customer['TYPE'];
    }
}

function getCustomer($connection, $id)
{
    $sql = "SELECT * FROM CUSTOMERS WHERE ID = $id";
    return mysqli_fetch_assoc(mysqli_query($connection, $sql));
}

function updatePassword($connection, $id, $currentPassword, $newPassword)
{
    $sql = "UPDATE CUSTOMERS SET PASSWORD = '{$newPassword}' WHERE ID = $id AND PASSWORD = '$currentPassword'";
    return mysqli_query($connection, $sql);
}

function updateCustomer($connection, $id, $customer)
{
    $sql = "UPDATE CUSTOMERS SET NAME = '{$customer['name']}', EMAIL = '{$customer['email']}' WHERE ID = {$id}";
    return mysqli_query($connection, $sql);
}

function updateEmployee($connection, $employee)
{
    $sql = "UPDATE EMPLOYEES  SET "
        . "COMPANY_NAME = '{$employee['company_name']}', "
        . "COMPANY_WEBSITE = '{$employee['company_website']}', "
        . "COMPANY_DESC = '{$employee['company_desc']}', "
        . "COMPANY_LOGO = '{$employee['company_logo']}', "
        . "COMPANY_GOOGLE_PLUS = '{$employee['company_googleplus']}', "
        . "COMPANY_FACEBOOK = '{$employee['company_facebook']}', "
        . "COMPANY_LINKEDIN = '{$employee['company_linkedin']}', "
        . "COMPANY_TWITTER = '{$employee['company_twitter']}', "
        . "COMPANY_INSTAGRAM= '{$employee['company_instagram']}' "
        . "WHERE ID = {$employee['employeeId']} ";
    return mysqli_query($connection, $sql);
}


function signup($connection, $data)
{
    $sql = "INSERT INTO CUSTOMERS (EMAIL, PASSWORD, NAME, TYPE) VALUE ('{$data['email']}', '{$data['password']}', '{$data['name']}', {$data['type']} )";
    return mysqli_query($connection, $sql);
}

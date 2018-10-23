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


function signup($connection, $data)
{
    $sql = "INSERT INTO CUSTOMERS (EMAIL, PASSWORD, NAME, TYPE) VALUE ('{$data['email']}', '{$data['password']}', '{$data['name']}', {$data['type']} )";
    return mysqli_query($connection, $sql);
}

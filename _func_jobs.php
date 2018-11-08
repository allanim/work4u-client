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

function getJob($connection, $id)
{
    $sql = "SELECT * FROM JOBS, EMPLOYEES WHERE JOBS.EMPLOYEE_ID = EMPLOYEES.ID and JOBS.ID = $id";
    return mysqli_fetch_assoc(mysqli_query($connection, $sql));
}

function getJobs($connection, $page, $limit)
{
    $jobs = array();

    if (!isset($limit)) $limit = 10;
    if (!isset($page)) $page = 1;
    $start_from = ($page - 1) * $limit;

    $sql = "SELECT * FROM JOBS, EMPLOYEES WHERE JOBS.EMPLOYEE_ID = EMPLOYEES.ID ORDER BY JOBS.ID DESC LIMIT $start_from, $limit";
    if ($result = mysqli_query($connection, $sql)) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($jobs, $row);
        }
    }
    return $jobs;
}

function getManageJobs($connection, $customerId, $page, $limit)
{
    $jobs = array();

    if (!isset($limit)) $limit = 10;
    if (!isset($page)) $page = 1;
    $start_from = ($page - 1) * $limit;

    $sql = "SELECT * FROM EMPLOYEES, JOBS WHERE JOBS.EMPLOYEE_ID = EMPLOYEES.ID AND EMPLOYEES.CUSTOMER_ID = $customerId ORDER BY JOBS.ID DESC LIMIT $start_from, $limit";
    if ($result = mysqli_query($connection, $sql)) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($jobs, $row);
        }
    }
    return $jobs;
}


function getLatestJobs($connection, $limit)
{
    if (!isset($limit)) $limit = 3;
    return getJobs($connection, 1, $limit);
}

function postJob($connection, $data)
{
    $title = addslashes($data['title']);
    $description = addslashes($data['description']);
    $now = date_create("now", timezone_open('America/Toronto'))->format('Y-m-d H:i:s');
    $postJob = "INSERT INTO JOBS (EMPLOYEE_ID, TITLE, DESCRIPTION, LOCATION, TYPE, CLOSING, EMAIL, REG_DATE) "
        . "VALUE ({$data['employeeId']}, '{$title}', '{$description}', '{$data['location']}', {$data['type']}, '{$data['closing']}', '{$data['email']}', '{$now}' )";
    return mysqli_query($connection, $postJob);
}

function updateJob($connection, $data)
{
    $sql = "UPDATE JOBS  SET "
        . "TITLE = '{$data['type']}', "
        . "DESCRIPTION = '{$data['type']}', "
        . "LOCATION = '{$data['type']}', "
        . "TYPE = '{$data['type']}', "
        . "CLOSING = '{$data['type']}', "
        . "EMAIL = '{$data['type']}' "
        . "WHERE ID = {$data['jobId']} ";
    return mysqli_query($connection, $sql);
}

function getEmployee($connection, $id)
{
    $sql = "SELECT * FROM EMPLOYEES WHERE CUSTOMER_ID = $id";
    return mysqli_fetch_assoc(mysqli_query($connection, $sql));
}

function hasPermitEmployee($connection, $id)
{
    $sql = "SELECT * FROM EMPLOYEES WHERE CUSTOMER_ID = $id";
    $result = mysqli_fetch_assoc(mysqli_query($connection, $sql));
    $now = date_create("now", timezone_open('America/Toronto'))->format('Y-m-d H:i:s');

    return $result['DUE_DATE'] != null && $now < $result['DUE_DATE'];
}

function insertEmployeeType($connection, $customerId, $type)
{
    $dueDate = date_create("+{$type} day", timezone_open('America/Toronto'))->format('Y-m-d H:i:s');
    $sql = "INSERT INTO EMPLOYEES (CUSTOMER_ID, MEMBER_TYPE, DUE_DATE) "
        . "VALUE ({$customerId}, '{$type}', '{$dueDate}')";
    return mysqli_query($connection, $sql);
}

function insertEmployee($connection, $employee)
{
    $sql = "INSERT INTO EMPLOYEES (CUSTOMER_ID, COMPANY_NAME, COMPANY_WEBSITE, COMPANY_DESC, COMPANY_LOGO, COMPANY_GOOGLE_PLUS, COMPANY_FACEBOOK, COMPANY_LINKEDIN, COMPANY_TWITTER, COMPANY_INSTAGRAM, MEMBER_TYPE, DUE_DATE) "
        . "VALUE ({$employee['customerId']}, '{$employee['name']}', '{$employee['website']}', '{$employee['description']}', '{$employee['logo']}','{$employee['googlePlus']}', '{$employee['facebook']}', '{$employee['linkedin']}', '{$employee['twitter']}', 0, '{$employee['type']}', '{$employee['date']}')";
    return mysqli_query($connection, $sql);
}

function updateEmployeeType($connection, $customerId, $type)
{
    $dueDate = date_create("+{$type} day", timezone_open('America/Toronto'))->format('Y-m-d H:i:s');
    $sql = "UPDATE EMPLOYEES  SET "
        . "MEMBER_TYPE = '{$type}', "
        . "DUE_DATE = '$dueDate'"
        . "WHERE ID = {$customerId} ";
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

function getJobType($jobType) {

    $result = "None";
    if ($jobType == 1) {
        $result = "Contract";
    } else if ($jobType == 2) {
        $result = "Co-op";
    } else if ($jobType == 3) {
        $result = "Full Time";
    } else if ($jobType == 4) {
        $result = "Part Time";
    }

    return $result;
}

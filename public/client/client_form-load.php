<?php
error_reporting(0);
if (isset($_SERVER['REQUEST_METHOD'])) {
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'admire');
    $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if ($con) {
        // echo "Success connecting to the db";
    }
    $title = $_POST['title'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $position = $_POST['position'];
    $company = $_POST['company'];
    $business = $_POST['business'];
    $employees = $_POST['employees'];
    $service_type = $_POST['service_type'];
    $street = $_POST['street'];
    $additionalinfo = $_POST['additional'];
    $zipcode = $_POST['zip'];
    $place = $_POST['place'];
    $country = $_POST['country'];
    $code = $_POST['code'];
    $phone = $_POST['phone'];
    $email = $_POST['your_email'];
    $sql = "INSERT INTO `admire`.`client` (`title`, `fname`, `lname`, `position`, `company`, `businessarena`, `employees`,  `service_type`, `streetNr`, `additionalinformation`, `zipcode`, `place`, `country`, `code`, `phoneno`, `email`, `service_aprooved`, `registertime`) VALUES ('$title', '$fname', '$lname', '$position', '$company', '$business', '$employees',  '$service_type', '$street', '$additionalinfo', '$zipcode', '$place', '$country', '$code', '$phone', '$email','No Response', current_timestamp())";
    $final = mysqli_query($con, $sql);
    if ($final) {
        header('location:last.html');
        echo "inserted";
    }
}

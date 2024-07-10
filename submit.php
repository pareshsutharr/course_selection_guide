<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $email = htmlspecialchars($_POST['email']);
    $course = htmlspecialchars($_POST['course']);
    $year = htmlspecialchars($_POST['year']);

    include('config.php');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }


    $qry="INSERT INTO enquiries (firstName, lastName, mobile, email, course, year) VALUES ('$firstName', '$lastName', '$mobile', '$email', '$course', '$year')";
    
    //echo $qry;
    if(mysqli_query($con,$qry)){

        echo "Enquiry submitted successfully!";
    } else {

        echo "Error: ";
    }


    
    $con->close();
}
?>

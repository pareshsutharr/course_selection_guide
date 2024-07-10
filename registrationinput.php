<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $code = htmlspecialchars($_POST['code']);
    $unm = htmlspecialchars($_POST['unm']);
    $pwd = htmlspecialchars($_POST['pwd']);
    $type = htmlspecialchars($_POST['type']);
    include('config.php');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }


    $qry="INSERT INTO login (code, unm, pwd, type) VALUES ('$code', '$unm', '$pwd', '$type')";
    
    //echo $qry;
    if(mysqli_query($con,$qry)){
        header("Location: login.php");
        exit();
        //echo "Enquiry submitted successfully!";
    } else {

        echo "Error: ";
    }


    
    $con->close();
}
?>

<?php 
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();
include('config.php');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $pass = $_POST['password'];

        $query = mysqli_query($con, "SELECT `unm`, `pwd`, `type` FROM `login` WHERE `unm`='$name' AND `pwd`='$pass'");
        $num = mysqli_fetch_array($query);
        $result = sizeof($num);

        if ($result > 0) {
            $unm = $num['unm'];
            $pwd = $num['pwd'];
            $_SESSION['wtname'] = $num['unm'];
            $_SESSION['wttype'] = $num['type'];

            date_default_timezone_set('Asia/Kolkata');
            $amcdt = '2025-01-23';
            $crntdt = date('Y-m-d', time());
            $date1 = date_create($amcdt);
            $date2 = date_create($crntdt);
            $diff = date_diff($date2, $date1);
            $diff = $diff->format("%R%a");

            if ($diff <= '10' && $diff > '0') {
                header("Location:index.php?msg=amc&days=$diff");
            } elseif ($diff <= '0') {
                header("Location:login.php?msg=exp&days=$diff");
            } else {
                header("Location:index.php");
            }
        } else {
            $error = "Login Failed!!!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>LOGIN PAGE</title>
</head>
<style>
        .btn-custom {
            display: inline-block;
            width: 100%;
            padding: 10px 20px;
            margin: 10px 0;
            font-size: 16px;
            color: white;
            background-color: #542372;
            border: 1px solid white;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .btn-custom:hover {
            background-color: #6c2e8c;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .btn-custom:active {
            background-color: #4a1c61;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
    </style>
<body>
    <section>
        <div class="imgbx">
          <img src="images/office-skyscrapers-business-district.jpg">
          <div class="login-aside-page">
            <h2>Student Watavaran</h2>
            <h4>Register Now to Unlock Your Dream Carrier <br>
            Education Guide - All Rights Reserved to Student Watavaran</h4>
          </div>
        </div>
        <div class="contentbx">
           <div class="formbx">
            <h2>Login</h2>
            <form action="" method="post">
                <div class="intputbx">
                     <span>Username</span>
                     <input id="name" type="text" name="name" required> 
                </div>
                <div class="intputbx">
                    <span>Password</span>
                    <input type="password" name="password" required> 
               </div>
              
               <div class="intputbx">
               <form method="post" action="">
    <button type="submit" name="submit" value="Submit" class="btn-custom">Sign In</button>
</form>

<a href="registration.php" class="btn-custom">Register Now</a>
               <!-- <div class="intputbx">
                 <p>Don't have an Account ? <a href="">Sing Up</a></p>
                 </div> -->
            </form>
           
           </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>

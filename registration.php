<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>STUDENT REGISTRATION</title>
</head>
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
            <h2>Create New Account</h2>
            <form action="registrationinput.php" method="POST">
                <div class="intputbx">
                     <span>Name </span>
                     <input type="text" name="code"> 
                </div>
                <div class="intputbx">
                    <span>Username</span>
                    <input type="text" name="unm"> 
               </div>
                <div class="intputbx">
                    <span>Password</span>
                    <input type="password" name="pwd"> 
               </div>
                <div class="intputbx">
                    <span>Course type</span>
                    <input type="text" name="type"> 
               </div>
              
               <div class="intputbx">
                <input type="submit" value="Sign Up" name="name4"> 
           </div>
               <div class="intputbx">
                <p>Already Have An Account ? <a href="login.php">Sign In</a></p>
                 </div>
            </form>
            
           
           </div>
        </div>
    </section>
</body>
</html>


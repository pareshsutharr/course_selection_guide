<?php
session_start(); 
if ($_SESSION['wtname']==''){header("Location:login.php");}else{
$username=$_SESSION['wtname'];
$type=$_SESSION['wttype'];
	include('config.php');
    include('sidebar.php');
    include('header.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science</title>
    <link rel="stylesheet" href="main.css">
</head>
<style>
      
        .flexboard {
            display: flex;
            flex-wrap: wrap;
            justify-content: left;
            position: absolute;
            top: 400px;
            left: 240px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 20px;
            width: 250px;
            overflow: hidden;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card-header {
            background-color: #607369;
            color: #fff;
            padding: 15px;
            font-size: 1.2em;
            text-align: center;
        }
        .cardss:hover {
            transform: translateY(-10px);
        }
        .card-header {
            background-color: #607369;
            color: #fff;
            padding: 15px;
            font-size: 1.2em;
            text-align: center;
        }
        .card-body {
            padding: 15px;
        }
        .card-body p {
            margin: 10px 0;
        }
        .enquiry-btn {
            display: block;
            width: 100%;
            text-align: center;
            padding: 10px;
            background-color: green;
            color: #fff;
            border: none;
            border-radius: 0 0 8px 8px;
            cursor: pointer;
            text-decoration: none;
        }
        .enquiry-btn:hover {
            background-color: #218838;
        }





 

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    justify-content: left;
            position: absolute;
            top: 90px;
            left: 240px;
}

h1 {
    text-align: center;
    color: #333;
}

.cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
    margin-top: 20px;
}

.cardss {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 150px;
    text-align: center;
    color: #555;
    font-size: 16px;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}




/* Styles for popup */
.popup {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    overflow: auto;
}

.popup-content {
    background-color: #fefefe;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
    border-radius: 8px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input {
    width: calc(100% - 20px);
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #45a049;
}


/* Existing styles remain the same */

.success-message {
    position: fixed;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border-radius: 4px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
    z-index: 9999;
}


/* General Styles */
body {
    font-family: Arial, sans-serif;
}

/* Popup Styles */
.popup {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 999; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.popup-content {
    background-color: #fefefe;
    margin: 10% auto; /* 10% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
    max-width: 500px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Close Button Styles */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

/* Form Styles */
.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

/* Success Message Styles */
#successMessage {
    margin-top: 20px;
    font-size: 16px;
    font-weight: bold;
}




    </style>
<body>

<div id="enquiryPopup" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h2>Enquiry Form</h2>
        <form id="enquiryForm" action="submit.php" method="POST">
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="course">Course:</label>
                <input type="text" id="course" name="course" required>
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <input type="text" id="year" name="year" required>
            </div>
            <button type="submit">Submit</button>
        </form>
        <div id="successMessage" style="display:none; color: green;">Your Application Is Sent Successfully. Our Team Will Reach Out To You In 24 Hours</div>
    </div>
</div>




<div class="container">
        <h1>Science - Entrance Exams</h1>
        <div class="cards">
            <div class="cardss">JEE Main</div>
            <div class="cardss">JEE Advanced</div>
            <div class="cardss">NEET</div>
            <div class="cardss">BITSAT</div>
            <div class="cardss">AIIMS MBBS</div>
            <div class="cardss">VITEEE</div>
            <div class="cardss">SRMJEEE</div>
            <div class="cardss">COMEDK UGET</div>
            <div class="cardss">KEAM</div>
            <div class="cardss">WBJEE</div>
            <div class="cardss">MHT CET</div>
            <div class="cardss">KCET</div>
            <div class="cardss">AMU Entrance Exam</div>
            <div class="cardss">CUCET</div>
            <div class="cardss">IPU CET</div>
        </div>
    </div>


<div class="flexboard">
    <div class="card">
        <div class="card-header">Step 1: Eligibility</div>
        <div class="card-body">
            <p>Ensure you have passed your 10th grade with a good score in Science and Mathematics subjects.</p>
            <a href="#" class="enquiry-btn">Enquiry Now</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Step 2: Schools/Colleges</div>
        <div class="card-body">
            <p>Look for schools/colleges that offer a Science stream and check their reputation and facilities.</p>
            <a href="#" class="enquiry-btn">Enquiry Now</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Step 3: Application Form</div>
        <div class="card-body">
            <p>Fill out the application forms of the schools/colleges you are interested in and submit them before the deadline.</p>
            <a href="#" class="enquiry-btn">Enquiry Now</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Step 4: Entrance Exam</div>
        <div class="card-body">
            <p>Prepare for and appear in the entrance exams if required by the institutions. Go and Enquire Now</p>
            <a href="#" class="enquiry-btn">Enquiry Now</a>
        </div>
    </div>
    </div>


    <script>
document.addEventListener('DOMContentLoaded', function() {
    var enquiryBtns = document.querySelectorAll('.enquiry-btn');
    var popup = document.getElementById('enquiryPopup');
    var closeBtn = popup.querySelector('.close');
    var enquiryForm = document.getElementById('enquiryForm');
    var successMessage = document.getElementById('successMessage');

    enquiryBtns.forEach(function(btn) {
        btn.addEventListener('click', function(event) {
            event.preventDefault();
            popup.style.display = 'block';
        });
    });

    closeBtn.addEventListener('click', function() {
        popup.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target === popup) {
            popup.style.display = 'none';
        }
    });

    enquiryForm.addEventListener('submit', function(event) {
        event.preventDefault();

        var formData = new FormData(enquiryForm);
        
        var xhr = new XMLHttpRequest();
        xhr.open('POST', enquiryForm.action, true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                enquiryForm.style.display = 'none';
                successMessage.style.display = 'block';
            } else {
                alert('There was a problem with the submission. Please try again.');
            }
        };
        xhr.send(formData);
    });
});


</script>
</body>
</html>
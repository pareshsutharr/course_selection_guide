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
    <title>Student Watavaran</title>
    <link rel="stylesheet" href="main.css">
    <script src="script.js"></script>
</head>
<style>
    </style>
<body>
<div class="maincontainer">
    <div id="container" style="padding: 20px; margin: 0 auto; width: 102%; height: 563px; overflow-y: scroll; background-color: whitesmoke; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <header style="text-align: center;">
            <h1 style="font-size: 2em; margin-bottom: 10px; color: #333; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Student Watawaran</h1>
            <h2 style="font-size: 1.5em; margin-bottom: 20px; color: #666;">Course Selection Guide</h2>
        </header>
        <section id="streams" style="margin-bottom: 20px;">
            <h2 style="font-size: 1.5em; margin-bottom: 20px; color: green;">CHOOSE YOUR STREAM</h2>
            <p style="line-height: 1.5; color: #444; background-color: skyblue; width: 42%;">Select the academic path that aligns with your interests and goals.</p>
            <div id="science" style="background-color: #fff; padding: 15px; border-radius: 5px; margin: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                <h3 style="font-size: 1.2em; margin-bottom: 5px; color: #333;">Science</h3>
                <p style="line-height: 1.5; color: #444;">
                    Explore the natural world through Biology, Chemistry, Physics, and delve into fields like medicine, engineering, environmental science, and research.
                </p>
                <ul style="margin-top: 10px; list-style: none; padding: 0;">
                    <li style="margin-bottom: 5px; color: black;">Ideal for students with strong analytical and problem-solving skills.</li>
                    <li style="margin-bottom: 5px; color: black;">Opens doors to careers in research labs, hospitals, pharmaceutical companies, and more.</li>
                </ul>
            </div>
            <div id="commerce" style="background-color: #fff; padding: 15px; border-radius: 5px; margin: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                <h3 style="font-size: 1.2em; margin-bottom: 5px; color: #333;">Commerce</h3>
                <p style="line-height: 1.5; color: #444;">
                    Master the principles of business, finance, marketing, and accounting. Prepare for roles in banking, finance, management consulting, marketing, and entrepreneurship.
                </p>
                <ul style="margin-top: 10px; list-style: none; padding: 0;">
                    <li style="margin-bottom: 5px; color: black;">Suited for students with an interest in business operations and financial analysis.</li>
                    <li style="margin-bottom: 5px; color: black;">Leads to careers in investment banking, financial planning, marketing management, and more.</li>
                </ul>
            </div>
            <div id="arts" style="background-color: #fff; padding: 15px; border-radius: 5px; margin: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                <h3 style="font-size: 1.2em; margin-bottom: 5px; color: #333;">Arts & Humanities</h3>
                <p style="line-height: 1.5; color: #444;">
                    Nurture your creativity through courses in Literature, Music, Visual Arts, History, and Philosophy. Find careers in communication, education, law, social work, and creative industries.
                </p>
                <ul style="margin-top: 10px; list-style: none; padding: 0;">
                    <li style="margin-bottom: 5px; color: black;">Appeals to students with strong communication, critical thinking, and creative skills.</li>
                    <li style="margin-bottom: 5px; color: black;">Offers diverse career paths in journalism, teaching, public relations, graphic design, and more.</li>
                </ul>
            </div>
        </section>
        <section id="programs" style="margin-bottom: 20px;">
            <h2 style="font-size: 1.5em; margin-bottom: 20px; color: green;">Degree Programs Explained</h2>
            <p style="line-height: 1.5; color: #444; background-color: skyblue; width: 55%;">Understand the different levels of academic qualifications and their typical durations.</p>
            <div id="ug" style="background-color: #fff; padding: 15px; border-radius: 5px; margin: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                <h4 style="font-size: 1.2em; margin-bottom: 5px; color: #333;">Undergraduate (UG)</h4>
                <p style="line-height: 1.5; color: #444;">The foundation of your academic journey, typically lasting 3-4 years, leading to a Bachelor's degree (e.g., B.Sc., B.A., B.Com.).</p>
            </div>
            <div id="pg" style="background-color: #fff; padding: 15px; border-radius: 5px; margin: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                <h4 style="font-size: 1.2em; margin-bottom: 5px; color: #333;">Postgraduate (PG)</h4>
                <p style="line-height: 1.5; color: #444;">Advanced studies following a UG degree, specializing in a specific field, leading to a Master's degree (e.g., M.Sc., M.A., M.Com.) in 1-2 years.</p>
            </div>
            <div id="phd" style="background-color: #fff; padding: 15px; border-radius: 5px; margin: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                <h4 style="font-size: 1.2em; margin-bottom: 5px; color: #333;">Doctor of Philosophy (PhD)</h4>
                <p style="line-height: 1.5; color: #444;">
                    The highest academic degree, typically lasting 3-5 years, focusing on original research culminating in a dissertation. Requires a Master's degree for entry.
                </p>
            </div>
        </section>
        <section id="resources" style="margin-bottom: 20px;">
            <h2 style="font-size: 1.5em; margin-bottom: 20px; color: green;">Explore Further</h2>
            <p style="line-height: 1.5; color: #444; background-color: skyblue; width: 42%;">Find additional resources to help you make informed decisions.</p>
            <ul style="margin-top: 10px; list-style: none; padding: 0;">
                <li style="margin-bottom: 5px; color: black;"><a href="https://www.careeronestop.org/" style="text-decoration: none; color: black;">Career counseling websites</a></li>
                <li style="margin-bottom: 5px; color: black;"><a href="https://www.topuniversities.com/world-university-rankings" style="text-decoration: none; color: black;">University ranking lists</a></li>
                <li style="margin-bottom: 5px; color: black;">Admission test preparation guides (e.g., for standardized tests like SAT, ACT, GRE, GMAT)</li>
            </ul>
        </section>
    </div>
</div>


</body>
</html>

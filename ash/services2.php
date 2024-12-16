<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If the user is not logged in, redirect them to the login page
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmodo: A Social Learning Platform for Students and Teachers</title>
    <link rel="icon" href="logo.jpg">
    <link rel="stylesheet" href="services2.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <img src="logo.jpg" alt="Logo" style="width: 50px;">
                <div class="logo">Edmodo: A Social Learning Platform for Students and Teachers</div>
                <ul class="nav-links">
                    <li><a href="interface.php">Home</a></li>
                    <li><a href="about2.php">About</a></li>
                    <li><a style="color: red">Services</a></li>
                    <li><a href="developers2.php">Developers</a></li>
                    <li><a href="emman.php">Modules</a> </li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="sub">
        <div style="line-height: 10px;">
            <div class="intr" style="font-size: 20px; text-align: center; margin-bottom: 30px; font-family: Times;">FEATURES</div>
            <div class="intr" style="font-size: 30px; text-align: center; margin-bottom: 30px; font-family: Verdana;">Our features & Services.</div>
        </div>
        <div class="subhead">
            <div class="about">
                <div class="one">
                    <div class="abo">
                        <img id="image" src="co.jpg" alt="Developer Image">
                        <div class="name" id="name">Classroom Commuication</div>
                        <div class="description" id="description">
                            Edmodo allows teachers and students to create visual classrooms where they can share announcements, assignments, and messages with students, fostering easy communication between students and teachers.
                        </div>
                    </div>
                    <div class="abo">
                        <img id="image" src="adap.jpg" alt="Developer Image">
                        <div class="name" id="name">Adaptive Learning Module</div>
                        <div class="description" id="description">
                            Edmodo enables the learners to adapt in changes in studying platform where they can choose to learn general knowledge with this platform.
                        </div>
                    </div>
                    <div class="abo">
                        <img id="image" src="collab.jpg" alt="Developer Image">
                        <div class="name" id="name">Collaboration</div>
                        <div class="description" id="description">
                            Edmodo enables the students to collaborate on projects, share resources, and participate in discussions, promoting group learning and teamwork.
                        </div>
                    </div>
                </div>
                <div class="dots" id="dots"></div>
            </div>
        </div>
    </div>
    
</body>
</html>

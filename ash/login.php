<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'database.php';
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmodo: A Social Learning Platform for Students and Teachers</title>
    <link rel="icon" href="logo.jpg">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <img src="logo.jpg" alt="Logo" style="width: 50px;">
                <div class="logo">Edmodo: A Social Learning Platform for Students and Teachers</div>
                <ul class="nav-links">
                    <li><a href="joash.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="developers.html">Developers</a></li>
                    <li><a style="color: red">Sign in</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="sub"><br>
        <div class="intr" style="font-size: 40px; text-align: center; margin-bottom: 30px; font-family: Calibri;">Good to see you again</div>
        <div class="subhead">
            <div class="about">
                <div class="one">
                    <div class="abo">
                        <form action="" method="POST">
                            <div class="text">Your email</div>
                            <i>👤</i>
                            <input type="email" placeholder="email" name="email" required> <br>
                            <div class="text">Your password</div>
                            <i>🔒</i>
                            <input type="password" placeholder="password" name="password" required><br>
                            <button>Sign in</button>
                        </form>
                        <button style="background-color: rgba(0, 0, 255, 0.3);"><a href="register.php">Register</a> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

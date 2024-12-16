<?php
session_start();
if (!isset($_SESSION['user_id'])) {
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
    <link rel="stylesheet" href="interface.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <img src="logo.jpg">
                <div class="logo">Edmodo: A Social Learning Platform for Students and Teachers</div>
                <ul class="nav-links">
                    <li><a style="color: red">Home</a></li>
                    <li><a href="about2.php">About</a></li>
                    <li><a href="services2.php">Services</a></li>
                    <li><a href="developers2.php">Developers</a></li>
                    <li><a href="emman.php">Modules</a> </li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-content">
                <div class="text-content">
                    <p class="subheading">WELCOME TO EDMODO!</p>
                    <h1>Curiosity, exploration, mastery.</h1>
                    <p class="description">
                    Curiosity sparks the desire to explore, leading to mastery through continuous learning.</p>
                </div>
                <div class="image-content">
                    <img src="two.jpg" alt="Designer Image">
                </div>
            </div>
        </section>
    </main>
</body>
</html>
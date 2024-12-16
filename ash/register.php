<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header {
            margin-left: -100px;
            background-color: #fff;
            border-bottom: 1px solid #eee;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 0;
        }

        .logo {
            font-size: 18px;
            font-weight: bold;
            color: #000;
            margin-right: 100px;
            margin-left: -100px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .nav-links li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            cursor: pointer;
        }

        .nav-links li a:hover {
            color: red;
            transition: 0.2s ease-in-out;
        }

        .sub {
            padding: 20px;
            background-color: #f9f9f9;
            height: 510px;
        }

        .subhead {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .about {
            max-width: 60%;
            text-align: center;
        }

        .description {
            font-size: 16px;
            color: #555;
            margin-top: 10px;
        }

        .abo{
            line-height: 50px;
            padding: 30px;
            width: 300px;
            border: 2px solid black;
            box-shadow: 1px 1px 10px 3px grey;
        }

        .abo input{
            border: 0.5px solid black;
            padding: 10px;
            font-size: 15px;
            background-color: white;
            margin-left: -10px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .abo button{
            background-color: rgba(0, 0, 255, 0.654);
            border: none;
            padding: 10px;
            border-radius: 10px;
            font-size: 15px;
            width: 60%;
            color: white;
        }
        .abo button a{
            text-decoration: none;
            color: white;
        }
        .text{
            text-align: left;
        }
        .abo i{
            border: 0.5px solid black;
            padding: 10px;
            font-size: 15px;
            font-style: normal;
            background-color: white;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }
    </style>
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

    <div class="sub">
        <div class="intr" style="font-size: 40px; text-align: center; margin-bottom: 30px; font-family: Calibri;">Welcome!</div>
        <div class="subhead">
            <div class="about">
                <div class="one">
                    <div class="abo">
                        <form action="" method="POST">
                            <div class="text">Your name</div>
                            <i>👤</i>
                            <input type="text" placeholder="name" required>
                            <div class="text">Your email</div>
                            <i>👤</i>
                            <input type="email" placeholder="email" name="email" required> <br>
                            <div class="text">Your password</div>
                            <i>🔒</i>
                            <input type="password" placeholder="password" name="password" required><br>
                            <button>Register</button>
                        </form>
                        <button style="background-color: rgba(0, 0, 255, 0.3);"><a href="login.php">Sign in</a> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require 'index.php';
    }
    ?>
</body>
</html>

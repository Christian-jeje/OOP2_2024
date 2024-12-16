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
    <link rel="stylesheet" href="about2.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <img src="logo.jpg" alt="Logo" style="width: 50px;">
                <div class="logo">Edmodo: A Social Learning Platform for Students and Teachers</div>
                <ul class="nav-links">
                    <li><a href="interface.php">Home</a></li>
                    <li><a style="color: red">About</a></li>
                    <li><a href="services2.php">Services</a></li>
                    <li><a href="developers2.php">Developers</a></li>
                    <li><a href="emman.php">Modules</a> </li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="sub">
        <img id="image" src="back1.jpeg" alt="Background" class="imagesub">
        <div class="intr" style="font-size: 40px; text-align: center; margin-bottom: 30px; font-family:Times;">Our Story</div>
        <div class="subhead">
            <div class="about">
                <div class="one">
                    <div class="abo">
                        <div class="name" id="name">Edmodo - Behind The Scene</div>
                        <div class="description" id="description">
                            Edmodo was inspired by the challenges educators faced in connecting with students and fostering collaborative learning in the digital age. On November 01, 2023, founders Joash Mercado and Maribel Cinco, both curious about what they could achieve as IT students, envisioned a platform where learning could transcend traditional classroom boundaries. The idea was born when a friend suggested creating a web system to manage their meetings. Joash and his partner, Maribel, both students at the time, embraced the concept enthusiastically. This marked the beginning of their journey to develop Edmodo.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub">
        <img id="image" src="back2.jpeg" alt="Background" class="imagesub">
        <div class="subhead">
            <div class="about">
                <div class="one">
                    <div class="abo">
                        <div class="description" id="description">
                            Initial development was met with hurdles. Limited funding and technical barriers meant the duo often worked late nights, balancing academic responsibilities and their passion project. Despite setbacks, they remained committed to creating a user-centric platform. The first prototype of Edmodo launched earlier this year. The launch was a success, earning positive feedback, attracting investors, and even becoming a highlight in their academic performance, securing them an ace to their grade.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub">
        <img id="image" src="back3.jpeg" alt="Background" class="imagesub">
        <div class="subhead">
            <div class="about">
                <div class="one">
                    <div class="abo">
                        <div class="description" id="description">
                            Securing funding was a significant challenge. Early investors were skeptical about the profitability of an education-focused platform. However, a few saw the potential and provided the seed capital necessary to expand development efforts. As the user base grew, so did technical demands. Scaling servers to accommodate thousands of users required continuous innovation. The team expanded, bringing in engineers and educators to bridge technology and pedagogy seamlessly.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub">
        <img id="image" src="back2.jpeg" alt="Background" class="imagesub">
        <div class="subhead">
            <div class="about">
                <div class="one">
                    <div class="abo">
                        <div class="description" id="description">
                            Edmodo officially became a recognized platform in early 2024, gaining traction globally. Its features, such as assignment sharing, quizzes, and discussion boards, resonated with educators seeking to engage students in a dynamic, interactive way. The journey wasn’t without challenges. Competing with larger tech companies in the education sector and navigating data privacy concerns required constant adaptation. Transparency and trust became core principles of Edmodo’s ethos.

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub">
        <img id="image" src="back1.jpeg" alt="Background" class="imagesub">
        <div class="subhead">
            <div class="about">
                <div class="one">
                    <div class="abo">
                        <div class="description" id="description">
                            Today, Edmodo serves millions worldwide, empowering teachers and students through a blend of social interaction and academic tools. It stands as a testament to the power of persistence and the importance of community-driven innovation in education. Looking back, the founders credit Edmodo’s success to their unwavering belief in the platform’s mission. From humble beginnings to a global impact, Edmodo remains dedicated to shaping the future of learning through technology.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub">
        <img id="image" src="back3.jpeg" alt="Background" class="imagesub">
    </div>
    <footer>
        All rights reserved.
    </footer>
</body>
</html>

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
    <link rel="stylesheet" href="developers2.css">
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
                    <li><a href="services2.php">Services</a></li>
                    <li><a style="color: red">Developers</a></li>
                    <li><a href="emman.php">Modules</a> </li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="sub">
        <div class="intr" style="font-size: 40px; text-align: center; margin-bottom: 30px; font-family: Times;">THE DEVELOPERS</div>
        <div class="subhead">
            <button class="nav-button prev" id="prev" disabled>&lt;</button>
            <div class="about">
                <div class="one">
                    <div class="abo">
                        <img id="image" src="one.jpg" alt="Developer Image">
                    </div>
                    <div class="description-container">
                        <div class="name" id="name">JOASH MERCADO</div>
                        <div class="description" id="description"></div>
                    </div>
                </div>
                <div class="dots" id="dots"></div>
            </div>
            <button class="nav-button next" id="next">&gt;</button>
        </div>
    </div>

    <script>
        const developers = [
            {
                src: "joashpic.png",
                name: "JOASH MERCADO",
                desc: "Joash Mercado is an inspiring IT student who exemplifies dedication and perseverance in his academic journey. His passion for technology drives him to excel in his studies, constantly seeking to expand his knowledge in the ever-evolving field of Information Technology. His disciplined approach to learning, combined with his enthusiasm for solving complex problems, sets him apart as a standout student, always striving for excellence. In addition to his academic achievements, Joash is also an active and committed ROTC cadet. Balancing his demanding studies with his responsibilities in the Reserve Officers' Training Corps, he demonstrates remarkable leadership and time management skills. His participation in ROTC not only highlights his sense of duty and discipline but also his desire to serve and contribute to his community. Joash's ability to succeed in both academics and military training serves as a powerful example of dedication and hard work."
            },
            {
                src: "maribelpic.png",
                name: "MARIBEL CINCO",
                desc: "Maribel Cinco is an active and dedicated IT student, consistently demonstrating her passion for technology and her commitment to academic excellence. She approaches her studies with a strong work ethic, always striving to enhance her skills and knowledge in the field of Information Technology. Her enthusiasm for learning drives her to engage in various projects, which helps her grow both academically and professionally. Beyond her studies, Maribel is also recognized as a hardworking college student who excels in managing her time and responsibilities. Despite the challenges that come with balancing a demanding academic schedule, she remains focused and determined to succeed. Her persistence, resilience, and proactive approach to overcoming obstacles serve as an inspiration to her peers and a testament to her dedication to achieving her goals."
            }
        ];

        let currentIndex = 0;

        const imageElement = document.getElementById("image");
        const nameElement = document.getElementById("name");
        const descriptionElement = document.getElementById("description");
        const dotsElement = document.getElementById("dots");
        const prevButton = document.getElementById("prev");
        const nextButton = document.getElementById("next");

        function updateDeveloper() {
            const currentDeveloper = developers[currentIndex];
            imageElement.src = currentDeveloper.src;
            nameElement.textContent = currentDeveloper.name;
            descriptionElement.textContent = currentDeveloper.desc;

            prevButton.disabled = currentIndex === 0;
            nextButton.disabled = currentIndex === developers.length - 1;

            document.querySelectorAll(".dot").forEach((dot, index) => {
                dot.classList.toggle("active", index === currentIndex);
            });
        }

        function createDots() {
            developers.forEach((_, index) => {
                const dot = document.createElement("div");
                dot.classList.add("dot");
                if (index === currentIndex) dot.classList.add("active");
                dot.addEventListener("click", () => {
                    currentIndex = index;
                    updateDeveloper();
                });
                dotsElement.appendChild(dot);
            });
        }

        prevButton.addEventListener("click", () => {
            if (currentIndex > 0) currentIndex--;
            updateDeveloper();
        });

        nextButton.addEventListener("click", () => {
            if (currentIndex < developers.length - 1) currentIndex++;
            updateDeveloper();
        });

        createDots();
        updateDeveloper();
    </script>
</body>
</html>

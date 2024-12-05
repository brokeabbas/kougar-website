<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions - Kougar Solutions</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap');

        header {
            background: linear-gradient(270deg, #00dbde, #fc00ff, #00dbde, #fc00ff);
            background-size: 400% 400%;
            animation: MovingGradient 8s ease infinite;
            height: 150px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes MovingGradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .header-content {
            transition: transform 0.5s ease-out;
        }

        main {
            position: relative;
            overflow: hidden;
        }

        canvas#particleCanvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .main-content {
            position: relative;
            z-index: 1;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
        }

        .nav-link {
            text-decoration: none;
            color: white;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .nav-link:hover, .nav-link:focus {
            background-color: #fc00ff;
            color: #00dbde;
        }

        .main-content {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        .solution-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .solution-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .solution-card a {
            display: block;
            padding: 20px;
            color: inherit;
            text-decoration: none;
        }

        .explore-solutions {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .hikvision-section .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .kougar-logo {
            max-width: 120px;
            margin-bottom: 20px;
        }

        .hikvision-title {
            font-size: 2.5rem;
            margin: 20px 0 10px;
            font-weight: bold;
            color: #333;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.2);
            background: -webkit-linear-gradient(right, #007bff, #6610f2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
        }

        .hikvision-description {
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: #666;
            line-height: 1.6;
            max-width: 80%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .hikvision-logos-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin: 75px; 
        }

        .hikvision-logos-table td {
            padding: 10px 5px; /* Reduced padding */
            text-align: center; /* Center the images within the cells */
        }

        .partner-logo {
            height: 150px;
            width: 150px; /* Increased size of images */
            object-fit: contain;
            transition: transform 0.2s;
        }

        .partner-logo:hover {
            transform: scale(1.1);
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes scaleIn {
            from { transform: scale(0.5); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        @keyframes trackingInExpand {
            0% {
                letter-spacing: -0.5em;
                opacity: 0;
            }
            40% {
                opacity: 0.6;
            }
            100% {
                letter-spacing: normal;
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                transform: translate3d(0, 40px, 0);
                opacity: 0;
            }
            to {
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @keyframes flipInX {
            from {
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                animation-timing-function: ease-in;
                opacity: 0;
            }
            40% {
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                animation-timing-function: ease-in;
            }
            60% {
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                opacity: 1;
            }
            80% {
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            }
            to {
                transform: perspective(400px);
            }
        }

        .kougar-logo {
            width: 200px;
            height: auto;
            display: block;
            margin: 0 auto;
            filter: brightness(200%);
        }

        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .whatsapp-float i {
            margin-top: 16px;
        }
    </style>
</head>
<body class="bg-gray-50">
<header class="bg-blue-900 text-white py-4 lg:py-6">
    <div class="container mx-auto flex justify-between items-center px-4 lg:px-8">
        <h1 class="flex-1 text-2xl lg:text-3xl font-bold text-center">Our Solutions</h1>
        <nav>
            <ul class="hidden lg:flex justify-center space-x-4">
                <li><a href="home.html" class="nav-link hover:text-gray-300">Home</a></li>
                <li><a href="Contact/get-started.html" class="nav-link hover:text-gray-300">Services</a></li>
            </ul>
            <button class="lg:hidden nav-toggle" aria-label="toggle navigation">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </nav>
    </div>
    <div class="lg:hidden bg-blue-800">
        <ul class="py-2">
            <li><a href="home.html" class="block px-4 py-2 hover:bg-blue-700">Home</a></li>
            <li><a href="Contact/get-started.html" class="block px-4 py-2 hover:bg-blue-700">Services</a></li>
        </ul>
    </div>
</header>

<section class="hikvision-section">
    <div class="container">
        <h2 class="hikvision-title">Our Global Partners</h2>
        <p class="hikvision-description">With over 10 different classes of cutting-edge Kougar solutions, we proudly stand as one of the largest suppliers in the Security and Solutions Market.</p>
        <table class="hikvision-logos-table mx-auto">
            <tr>
                <td><img src="Images/hik.png" alt="Hikvision Logo" class="partner-logo"></td>
                <td><img src="Images/Jinko solar.png" alt="Jinko Logo" class="partner-logo"></td>
                <td><img src="Images/dsppa.jpg" alt="DSPPA Logo" class="partner-logo"></td>    
            </tr>
            <tr>  
                <td><img src="Images/astrophysics.png" alt="Astrophysics Logo" class="partner-logo"></td>
                <td><img src="Images/hytera.png" alt="Hytera Logo" class="partner-logo"></td>
                <td><img src="Images/eaton.png" alt="Eaton Logo" class="partner-logo"></td>
            </tr>
            <tr>
                <td><img src="Images/nemtek.png" alt="Nemtek Logo" class="partner-logo"></td>
                <td><img src="Images/cooper.png" alt="Cooper Logo" class="partner-logo"></td>
                <td><img src="Images/ITC.png" alt="ITC Logo" class="partner-logo"></td>
            </tr>
        </table>
    </div>
</section>

<?php include 'Solutions/db.php'; // Include your DB connection ?>
<main class="container mx-auto px-4 py-8 relative" id="mainContainer">
    <canvas id="particleCanvas"></canvas>
    <div class="main-content container mx-auto px-4 py-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        <?php
        $sql = "SELECT * FROM solution_cards";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='solution-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg m-4 transition-shadow duration-300'>";
                echo "<a href='Solutions/cctv.php?id={$row['id']}' class='solution-link'>";
                echo "<i class='{$row['icon_class']} text-blue-500 text-3xl mb-4'></i>";
                echo "<h3 class='solution-title text-xl font-semibold mb-2'>{$row['title']}</h3>";
                echo "</a>";
                echo "</div>";
            }
        } else {
            echo "0 solutions found.";
        }
        $conn->close();
        ?>
    </div>
</main>

<a href="https://api.whatsapp.com/send?phone=2348140888654" class="whatsapp-float" target="_blank" title="Chat with us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

<footer class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-600 text-white">
    <div class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="space-y-4">
            <h2 class="text-xl font-bold">Kougar Solutions</h2>
            <p>A leading provider in advanced security and technology solutions, dedicated to empowering businesses and communities.</p>
            <div class="flex space-x-4">
                <a href="https://www.twitter.com/" class="hover:opacity-75" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/" class="hover:opacity-75" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/" class="hover:opacity-75" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <div>
            <h3 class="text-lg font-semibold mb-2">Quick Links</h3>
            <ul class="space-y-2">
                <li><a href="about.html" class="hover:text-blue-300">About Us</a></li>
                <li><a href="solutions.php" class="hover:text-blue-300">Our Solutions</a></li>
                <li><a href="home.html#servreq" class="hover:text-blue-300">Contact</a></li>
                <li><a href="career.php" class="hover:text-blue-300">Careers</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-lg font-semibold mb-2">Services</h3>
            <ul class="space-y-2">
                <li><a href="Solutions/cctv.php?id=1" class="hover:text-blue-300">CCTV Systems</a></li>
                <li><a href="Solutions/cctv.php?id=4" class="hover:text-blue-300">Access Control</a></li>
                <li><a href="Solutions/cctv.php?id=2" class="hover:text-blue-300">Fire Alarm Systems</a></li>
                <li><a href="Solutions/cctv.php?id=3" class="hover:text-blue-300">Intrusion Detection</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-lg font-semibold mb-2">Contact Info</h3>
            <ul class="space-y-2">
                <li>Phone: +234 80 9552 2886, +234 81 7993 3333</li>
                <li>Email: info@kougarsolution-ltd.com</li>
                <li>Address: Plot 1185, Cadastral Zone,
                    B06 Parkway Astra Gallery Building,
                    Mabushi, Abuja.</li>
            </ul>
        </div>
    </div>

    <div class="text-center py-4 border-t border-blue-700">
        &copy; 2024 Kougar Solutions. All rights reserved.
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const header = document.querySelector('header');
        header.innerHTML = '<div class="header-content">' + header.innerHTML + '</div>';

        document.addEventListener('mousemove', parallax);
        function parallax(e) {
            const layers = document.querySelectorAll('.header-content');
            const speed = 0.05;
            layers.forEach(layer => {
                const x = (window.innerWidth - e.pageX * speed) / 100;
                const y = (window.innerHeight - e.pageY * speed) / 100;
                layer.style.transform = `translateX(${x}px) translateY(${y}px)`;
            });
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        const canvas = document.getElementById('particleCanvas');
        const ctx = canvas.getContext('2d');

        canvas.width = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;

        let particlesArray = [];
        const numberOfParticles = 100;
        
        window.addEventListener('resize', () => {
            canvas.width = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
            init();
        });

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 1;
                this.speedX = Math.random() * 2 - 1;
                this.speedY = Math.random() * 2 - 1;
            }
            update() {
                if (this.x > canvas.width || this.x < 0) {
                    this.speedX = -this.speedX;
                }
                if (this.y > canvas.height || this.y < 0) {
                    this.speedY = -this.speedY;
                }
                this.x += this.speedX;
                this.y += this.speedY;
            }
            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
            connect() {
                particlesArray.forEach(particle => {
                    const distance = Math.sqrt(Math.pow(this.x - particle.x, 2) + Math.pow(this.y - particle.y, 2));
                    if (distance < 120) {
                        ctx.beginPath();
                        ctx.strokeStyle = 'white';
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(this.x, this.y);
                        ctx.lineTo(particle.x, particle.y);
                        ctx.stroke();
                    }
                });
            }
        }

        function init() {
            particlesArray = [];
            for (let i = 0; i < numberOfParticles; i++) {
                particlesArray.push(new Particle());
            }
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particlesArray.forEach(particle => {
                particle.update();
                particle.draw();
                particle.connect();
            });
            requestAnimationFrame(animate);
        }

        init();
        animate();
    });
</script>

</body>
</html>

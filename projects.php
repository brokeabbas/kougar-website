<?php
$host = "localhost";
$port = 3306; // Replace with your MySQL port if it's not the default
$db   = 'kougarsolutionlt_allprojects';
$user = 'kougarsolutionlt_web';
$pass = 'wr4bq];sW.ru'; // Assuming no password is set for MySQL root user
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
// ... rest of your PDO connection code

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Showcase - Kougar Solutions</title>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .header-content {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 2rem 0;
        }
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background: #edf2f7;
        }
        .header {
            background-color: #073763;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }
                .header nav {
        background-image: linear-gradient(90deg, rgb(196, 195, 240) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
        }

        /* Subtle animation for the logo and nav links on hover */
        .header nav a:hover {
        transform: translateY(-2px);
        }

        /* Responsive Navigation Menu */
        @media (max-width: 768px) {
        .navigation-menu {
            display: none; /* Hide navigation menu on small screens */
        }
        /* Add hamburger menu icon and interactions here if needed */
        }

        .project-card {
            background-color: #ffffff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        .project-card:hover {
            transform: translateY(-10px);
            border-color: rgba(255, 255, 255, 0.3);
        }
        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .project-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .project-content {
            padding: 20px;
            flex-grow: 1; /* Ensures content area is uniform */
        }
        .project-card h3 {
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: #333333;
        }

        .project-card p {
            font-size: 1rem;
            color: #666666;
        }

        .project-card a {
            display: inline-block;
            background-color: #4a90e2; /* Primary Button Color */
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-top: 15px; /* Adjust as needed */
            text-align: center;
        }

        .project-card a:hover {
            background-color: #357abd; /* Darker shade for hover */
            transform: translateY(-2px); /* Slight lift effect */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow for depth */
        }


        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .project-card:hover .project-image {
            transform: scale(1.03);
        }
        .work-with-us {
        background-image: linear-gradient(to right, #2563eb, #4f46e5);
        position: relative;
        overflow: hidden;
        padding: 4rem 0; /* Increased padding for larger section */
        }

        .work-with-us h2 {
        margin-bottom: 1rem;
        }

        .work-with-us p {
        margin-bottom: 2rem;
        }
        
        .bg-futuristic {
        background: linear-gradient(115deg, #0f17ad 0%, #0061ff 74%);
        clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);
        }

        .work-with-us {
        position: relative;
        overflow: hidden;
        padding: 3rem 0;
        }

        .work-with-us::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        right: -50%;
        bottom: -50%;
        background: linear-gradient(45deg, #fb0094, #0000ff, #00ff00, #ffff00, #ff0000, #fb0094, #0000ff, #00ff00, #ffff00, #ff0000);
        background-size: 300% 300%;
        animation: moveGradient 4s alternate infinite;
        border-radius: 50%;
        z-index: 0;
        filter: blur(40px);
        opacity: 0.7;
        }

        @keyframes moveGradient {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
        }

        .cta-content {
        position: relative;
        z-index: 1;
        }

        .cta-button {
        display: inline-block;
        background-color: #ffffff;
        color: #0a2540;
        padding: 1rem 2.5rem; /* Increased padding for a larger button */
        border-radius: 30px; /* Slightly more rounded */
        box-shadow: 0 5px 15px 0 rgba(49, 58, 73, 0.40);
        transform: translateY(0);
        transition: transform 0.4s ease-out, box-shadow 0.4s ease-out; /* Adjusted for smoother transition */
        text-decoration: none;
        font-weight: bold;
        font-size: 1.2rem; /* Larger font size for the button */
        }

        .cta-button:hover,
        .cta-button:focus {
        transform: translateY(-7px);
        box-shadow: 0 8px 25px rgba(49, 58, 73, 0.60); /* Enhanced shadow for hover effect */
        }
                /* Responsive Design Adjustments */
        @media (max-width: 768px) {
        .work-with-us {
            padding: 3rem 0; /* Adjust padding for mobile view */
        }

        .cta-button {
            padding: 0.75rem 2rem; /* Adjust button size for mobile */
        }
        }
                .work-with-us a {
        background: linear-gradient(to right, #2563eb, #4f46e5); /* Full-width gradient background */
        background-color: #ffffff;
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 9999px; /* Fully rounded corners for a pill shape */
        display: inline-block;
        text-transform: uppercase;
        font-size: 1rem;
        font-weight: bold;
        text-decoration: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .work-with-us a:hover {
        background-color: #f3f4f6; /* Light grey for hover state */
        box-shadow: 0 7px 20px rgba(0, 0, 0, 0.2);
        }
                .military-link {
            display: inline-block;
            color: #4A5568; /* Adjust the color to fit military green or camo theme */
            background-color: #CBD5E0; /* Light grey for contrast */
            padding: 8px 16px;
            border: 2px solid #2D3748; /* Darker shade for border */
            border-radius: 4px;
            text-transform: uppercase;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
            text-decoration: none;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        }

        .military-link:hover, .military-link:focus {
            background-color: #2D3748; /* Darker background on hover */
            color: #E2E8F0; /* Light text color */
            border-color: #4A5568;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
        }

        /* Optional: Add a camouflage pattern */
        .military-link {
            background-image: url('path/to/camouflage.png'); /* Your camo pattern */
            background-size: cover;
        }
        /* Custom CSS for futuristic animations */
        @keyframes moveGradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Apply the animation to the background */
        .bg-futuristic {
            background-size: 200% 200%;
            animation: moveGradient 8s ease infinite;
        }
                .cta-button {
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.5s ease;
        }


        .cta-button::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: all 0.5s ease;
        }

        .cta-button:hover::after {
            left: 100%;
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
<body class="relative min-h-screen bg-gray-800 text-white">
    <div id="particles-js"></div>
    <header class="header-content">
        <h1 class="text-4xl font-bold mb-2">OUR PROJECTS</h1>
        <p class="mb-4">Explore The Top Projects We Have Carried Out For Prestigeous Clients</p>
        <nav class="flex justify-center space-x-4">
        <a href="home.html" class="military-link">HOME</a>
        <a href="defense/defence-request.php" class="military-link">DEFENCE</a>
        </nav>
    </header>
      
    
    <main class="project-grid container mx-auto mt-8">
    <?php
    $stmt = $pdo->query('SELECT id, name, description, image FROM projects');
    
    while ($row = $stmt->fetch()) {
        echo '<div class="project-card bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out m-4">';
        echo '<div class="project-image h-56 w-full object-cover">';
        echo '<img src="Images/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['name']) . ' Project">';
        echo '</div>';
        echo '<div class="project-content p-4">';
        echo '<h2 class="text-xl font-semibold text-gray-800">' . htmlspecialchars($row['name']) . '</h2>';
        echo '<p class="text-gray-600">' . htmlspecialchars($row['description']) . '</p>';
        echo '<a href="PROJECTS/view-project.php?id=' . htmlspecialchars($row['id']) . '" class="inline-block mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out transform hover:-translate-y-1">View Project</a>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</main>


        
    </main>

    <!-- Call-to-Action Section -->
<section class="work-with-us text-white text-center py-10 relative overflow-hidden">
    <div class="cta-content z-10 relative">
        <h2 class="text-3xl font-bold mb-4">Ready to Transform Your Security?</h2>
        <p class="mb-6">Connect with us and let's discuss how we can elevate your project with our innovative solutions.</p>
        <a href="home.html#servreq" class="cta-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out transform hover:scale-110">
            Start a Conversation
        </a>
    </div>
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-blue-600 to-blue-800 opacity-75 z-0"></div>
</section>

<a href="https://api.whatsapp.com/send?phone=2348140888654" class="whatsapp-float" target="_blank" title="Chat with us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

  
  

<footer class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-600 text-white">
    <div class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Company Info -->
        <div class="space-y-4">
            <h2 class="text-xl font-bold">Kougar Solutions</h2>
            <p>A leading provider in advanced security and technology solutions, dedicated to empowering businesses and communities.</p>
            <div class="flex space-x-4">
                <a href="https://www.twitter.com/" class="hover:opacity-75" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/" class="hover:opacity-75" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/" class="hover:opacity-75" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="text-lg font-semibold mb-2">Quick Links</h3>
            <ul class="space-y-2">
                <li><a href="about.html" class="hover:text-blue-300">About Us</a></li>
                <li><a href="solutions.php" class="hover:text-blue-300">Our Solutions</a></li>
                <li><a href="home.html#servreq" class="hover:text-blue-300">Contact</a></li>
                <li><a href="career.php" class="hover:text-blue-300">Careers</a></li>
            </ul>
        </div>

        <!-- Services -->
        <div>
            <h3 class="text-lg font-semibold mb-2">Services</h3>
            <ul class="space-y-2">
                <li><a href="Solutions/cctv.php?id=1" class="hover:text-blue-300">CCTV Systems</a></li>
                <li><a href="Solutions/cctv.php?id=4" class="hover:text-blue-300">Access Control</a></li>
                <li><a href="Solutions/cctv.php?id=2" class="hover:text-blue-300">Fire Alarm Systems</a></li>
                <li><a href="Solutions/cctv.php?id=3" class="hover:text-blue-300">Intrusion Detection</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
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

<!-- Tailwind CSS CDN and FontAwesome Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 50,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });

        document.addEventListener('DOMContentLoaded', function () {
    const bg = document.getElementById('animatedGradient');
    let gradientAngle = 0;
    setInterval(() => {
        gradientAngle = (gradientAngle + 1) % 360;
        bg.style.backgroundImage = `linear-gradient(${gradientAngle}deg, #2563EB, #1D4ED8)`;
    }, 100); // Change the angle every 100 milliseconds
});


document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100');
                entry.target.classList.remove('opacity-0');
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.project-card').forEach(card => {
        observer.observe(card);
        card.classList.add('transition-opacity', 'duration-1000', 'opacity-0');
    });
});
    </script>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers at Kougar Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" integrity="sha384-oB4dyQF5+KlYcBv5H5PZlFqWfNbOM0l+6CQv+GZlRq0Z1P3N69DjdOE7f2+1h8jT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Additional CSS for custom styles if necessary -->
    <style>
    header {
        background-size: 200% 200%;
        background-image: linear-gradient(45deg, #2c0a58 0%, #0e2b66 50%, #1f073f 100%);
        animation: GradientShift 8s ease infinite;
        color: #fff;
        text-align: center;
        padding: 2rem 0;
        position: relative;
        overflow: hidden;
    }
    .header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 2rem; /* Adjust the padding as needed */
}

.logo {
    max-width: 150px; /* Adjust the size as needed */
    height: auto;
    filter: brightness(250%); /* Increase brightness; you can go above 100% if needed */
}

.logo-container {
    flex: 1; /* Allows the logo to grow and take necessary space */
}

h1 {
    flex: 3; /* Allows the title to grow and take necessary space */
    text-align: right; /* Aligns the text to the right */
    margin-left: 1rem; /* Adjust spacing between logo and title */
}

/* Optional: Add responsiveness to your layout */
@media (max-width: 768px) {
    .header-content {
        flex-direction: column;
        text-align: center;
    }

    .logo-container,
    h1 {
        flex: none; /* Do not allow the items to grow or shrink */
    }

    h1 {
        text-align: center; /* Center the title on smaller screens */
        margin: 1rem 0; /* Add some margin on top and bottom */
    }
}

    

    @keyframes GradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    .hero {
    background-image: url('Images/shakebackground.jpg'); /* Adjust the path to your image */
    background-size: cover;
    background-position: center;
    position: relative;
    color: #FFFFFF;
    text-align: center;
    padding: 4rem 0;
}

/* Add a dark blue overlay */
.hero::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 139, 0.7); /* Dark blue with transparency */
    z-index: 0;
}

/* Ensure the content is above the overlay */
.hero-inner {
    position: relative;
    z-index: 1;
}

    .hero-title {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        font-weight: bold;
    }

    .hero-subtitle {
        font-size: 1.2rem;
        margin-bottom: 2rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.6;
    }

    .hero-cta {
        background: linear-gradient(45deg, #6a11cb, #2575fc);
        color: #FFFFFF;
        text-decoration: none;
        padding: 0.8rem 2.5rem;
        border-radius: 5px;
        transition: background 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .hero-cta:hover {
        background: linear-gradient(45deg, #2575fc, #6a11cb);
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate3d(0, 40px, 0);
        }
        to {
            opacity: 1;
            transform: none;
        }
    }
    #company-culture {
        background: #f9f9f9;
        color: #333;
        padding: 60px 0;
    }
    .section-title {
        font-size: 2.5rem;
        color: #2a2a72;
        margin-bottom: 1rem;
    }
    .intro-text {
        max-width: 600px;
        margin: auto;
        line-height: 1.6;
        margin-bottom: 2rem;
    }
    .culture-features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 20px;
    }
    .feature-item {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    .feature-item:hover {
        transform: translateY(-5px);
    }
    .feature-item i {
        color: #4a90e2;
        margin-bottom: 1rem;
    }
    .feature-item h3 {
        font-size: 1.25rem;
        color: #333;
        margin-bottom: 0.5rem;
    }
    .feature-item p {
        font-size: 1rem;
        line-height: 1.6;
    }
    #job-listings {
    background: #f0f0f5;
    overflow: hidden;
}

.job-filters {
    margin-bottom: 2rem;
}

.filter-btn {
    padding: 0.5rem 1rem;
    background-color: #4c9aff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.filter-btn:hover, .filter-btn.active {
    background-color: #1c7ed6;
}

.bg-white {
    transition: transform 0.3s ease-out, box-shadow 0.3s ease-out;
}

.bg-white:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
}
.bg-gradient-to-r {
    /* Enhanced background gradient */
    background-image: linear-gradient(to right, #2563EB, #9333EA);
}

.form-input {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    transition: border-color 0.3s ease-in-out;
}

.form-input:focus {
    border-color: #2563EB;
    outline: none;
}

.file-input {
    width: 100%;
    padding: 0.5rem;
    background-color: #f9fafb;
    border-radius: 0.375rem;
    transition: background-color 0.3s ease-in-out;
}

.file-input:hover {
    background-color: #e5e7eb;
}

.submit-btn {
    width: 100%;
    background-color: #4F46E5;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.submit-btn:hover {
    background-color: #4338CA;
}

.upload-cv {
    position: relative;
    text-align: left;
    max-width: 100%;
}

/* Responsive Design */
@media screen and (max-width: 640px) {
    .form-input, .submit-btn, .file-input {
        padding: 10px 15px;
    }
    .bg-gradient-to-r {
        padding: 8px;
    }
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
<header>
    <div class="header-content">
        <!-- Link around the logo image goes back to the home page -->
        <a href="home.html" class="logo-container">
            <img src="Images/kougar Logo.png" alt="Kougar Solutions Logo" class="logo">
        </a>
        <h1 class="text-3xl font-bold">Join Our Team</h1>
        <!-- ... rest of your header content ... -->
    </div>
</header>



    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-inner">
            <h2 class="hero-title">Empower Your Future</h2>
            <p class="hero-subtitle">Join us on our mission to innovate and lead in the security solutions industry.</p>
            <a href="#openings" class="hero-cta">View Open Positions</a>
        </div>
    </section>


    <!-- Company Culture -->
    <section id="company-culture">
    <div class="container mx-auto px-4 py-8 text-center">
        <h2 class="section-title">Our Company Culture</h2>
        <p class="intro-text">At Kougar Solutions, we're more than just a team - we're a family. Discover the core values and practices that define our unique culture.</p>
        
        <div class="culture-features grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
        <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-users fa-3x"></i>
                <h3>Collaboration</h3>
                <p>Our projects thrive on teamwork, ensuring every voice is heard and valued.</p>
            </div>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-lightbulb fa-3x"></i>
                <h3>Innovation</h3>
                <p>We foster creativity to solve complex challenges and push the boundaries of what's possible.</p>
            </div>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-heartbeat fa-3x"></i>
                <h3>Passion</h3>
                <p>Our dedication to making a difference drives us to achieve excellence in everything we do.</p>
            </div>
            <!-- Add more features as needed -->
        </div>
    </div>
</section>


    <!-- Job Listings -->
    <section class="py-12 px-4" id="job-listings">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-8">Explore Career Opportunities</h2>
        <div class="job-filters flex justify-center gap-4 mb-8">
            <button class="filter-btn" data-filter="all">All</button>
            <!-- Additional filter buttons to be added dynamically based on job categories -->
        </div>
        <div class="max-w-4xl mx-auto">
                <h4 class="font-semibold text-lg">Security Solutions Architect</h4>
                <p class="text-sm text-gray-800 mt-2">Location: Remote or Abuja, Nigeria</p>
                <p class="text-gray-600 mt-2">We're looking for a skilled Security Solutions Architect to design robust security frameworks for our clients.</p>
                <a href="#" class="text-blue-600 hover:text-blue-700 mt-4 inline-block">Apply Now</a>
            </div>
            <!-- Repeat for other job listings -->
        </div>
    </section>

    <!-- Application Form -->
    <section class="py-12 px-4 bg-gradient-to-r from-blue-800 to-indigo-700 text-white text-center">
    <h3 class="text-2xl font-semibold mb-8">Can't Find the Right Role?</h3>
    <p class="max-w-xl mx-auto mb-8">Submit your resume. We're always looking for talent and will get in touch if a role that matches your skills becomes available.</p>
    <form action="#" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white rounded-lg p-8 shadow-lg text-gray-700">
        <div class="space-y-4">
            <input type="text" name="name" placeholder="Full Name" required class="form-input">
            <input type="email" name="email" placeholder="Email" required class="form-input">
            <textarea name="message" rows="4" placeholder="Introduce Yourself" required class="form-input"></textarea>
            <select name="role" required class="form-input">
                <option value="">Select Desired Role</option>
                <option value="developer">Developer</option>
                <option value="designer">Designer</option>
                <option value="marketing">Marketing</option>
                <option value="sales">Sales</option>
                <!-- Add more roles as needed -->
            </select>
            <div class="upload-cv">
                <label for="cv" class="block mb-2 font-medium text-gray-700">Upload Your CV (PDF, DOCX):</label>
                <input type="file" id="cv" name="cv" accept=".pdf,.docx" required class="file-input">
            </div>
            <button type="submit" class="submit-btn">Submit Application</button>
        </div>
    </form>
</section>

<a href="https://api.whatsapp.com/send?phone=2348140888654" class="whatsapp-float" target="_blank" title="Chat with us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>




    <footer class="bg-gray-800 text-white text-center py-4">
        &copy; 2024 Kougar Solutions. All rights reserved.
    </footer>


    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
    AOS.init();
    </script>
    <script>
    particlesJS("hero", {
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
            }
        },
        "retina_detect": true
    });
</script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.querySelector('header');
        header.addEventListener('mousemove', (e) => {
            const { offsetX, offsetY, clientWidth, clientHeight } = e.target;
            const xPos = (offsetX / clientWidth) - 0.5;
            const yPos = (offsetY / clientHeight) - 0.5;
            const headerContent = document.querySelector('.header-content');
            const rotationStrength = 25;
            headerContent.style.transform = `rotateX(${yPos * rotationStrength}deg) rotateY(${xPos * rotationStrength}deg)`;
        });

        header.addEventListener('mouseleave', () => {
            const headerContent = document.querySelector('.header-content');
            headerContent.style.transform = 'rotateX(0) rotateY(0)';
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
    const jobs = [
        { title: "Security Solutions Architect", location: "Remote or Abuja, Nigeria", category: "engineering", link: "#" },
        // Additional job listings...
    ];

    const filtersContainer = document.querySelector('.job-filters');
    const listingsContainer = document.querySelector('#job-listings .max-w-4xl');

    // Populate job listings
    function populateJobs(jobs) {
        listingsContainer.innerHTML = ''; // Clear existing listings
        jobs.forEach(job => {
            const jobElement = document.createElement('div');
            jobElement.classList.add('bg-white', 'p-6', 'rounded-lg', 'shadow', 'mb-4');
            jobElement.innerHTML = `
                <h4 class="font-semibold text-lg">${job.title}</h4>
                <p class="text-sm text-gray-800 mt-2">Location: ${job.location}</p>
                <p class="text-gray-600 mt-2">We're looking for a skilled ${job.title} to design robust security frameworks for our clients.</p>
                <a href="${job.link}" class="text-blue-600 hover:text-blue-700 mt-4 inline-block">Apply Now</a>
            `;
            listingsContainer.appendChild(jobElement);
        });
    }

    // Initialize with all jobs
    populateJobs(jobs);

    // Filter jobs based on category
    function filterJobs(category) {
        if (category === 'all') {
            populateJobs(jobs);
        } else {
            const filteredJobs = jobs.filter(job => job.category === category);
            populateJobs(filteredJobs);
        }
    }

    // Populate filter buttons based on job categories
    function populateFilters(jobs) {
        const categories = new Set(jobs.map(job => job.category));
        categories.forEach(category => {
            const filterBtn = document.createElement('button');
            filterBtn.classList.add('filter-btn');
            filterBtn.textContent = category;
            filterBtn.dataset.filter = category;
            filterBtn.addEventListener('click', () => filterJobs(category));
            filtersContainer.appendChild(filterBtn);
        });
    }

    populateFilters(jobs);
});

</script>

</body>
</html>

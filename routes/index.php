<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Academic Record Management System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        header {
            background-color: #003366;
            color: white;
            padding: 1rem;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }
        nav ul {
            list-style-type: none;
            display: flex;
            justify-content: space-around;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        .hero {
            background-image: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('/placeholder.svg?height=800&width=1200');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .hero-content {
            max-width: 800px;
            padding: 2rem;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #003366;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .cta-button {
            display: inline-block;
            background-color: #ff9900;
            color: white;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #e68a00;
        }
        .features {
            padding: 4rem 2rem;
            background-color: #f4f4f4;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .feature-card {
            background-color: white;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .feature-card img {
            width: 100px;
            height: 100px;
            margin-bottom: 1rem;
        }
        .testimonials {
            padding: 4rem 2rem;
            background-color: #003366;
            color: white;
        }
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .testimonial-card {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 5px;
        }
        .testimonial-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 1rem;
        }
        footer {
            background-color: #002244;
            color: white;
            padding: 2rem;
            text-align: center;
        }
        .footer-content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }
        .footer-section {
            margin-bottom: 1rem;
        }
        .footer-section h3 {
            margin-bottom: 0.5rem;
        }
        .footer-section ul {
            list-style-type: none;
        }
        .footer-section ul li {
            margin-bottom: 0.5rem;
        }
        .footer-section ul li a {
            color: #ccc;
            text-decoration: none;
        }
        .footer-bottom {
            border-top: 1px solid #ccc;
            padding-top: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home" class="hero">
            <div class="hero-content">
                <h1>Student Academic Record Management System</h1>
                <p>Streamline your educational institution's record-keeping process with our comprehensive, user-friendly academic management solution. Efficiently manage student data, course information, and academic progress all in one place.</p>
                <!-- <a href="#" class="cta-button">Get Started</a> -->
                <a href="/hostel-dining/routes/login.php" class="cta-button"> Login </a>
                <a href="/hostel-dining/routes/adminlogin.php" class="cta-button"> Admin </a>
            </div>
        </section>
        <section id="features" class="features">
            <h2>Key Features</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <img src="/placeholder.svg?height=100&width=100" alt="Student Management">
                    <h3>Student Management</h3>
                    <p>Easily manage student profiles, including personal information, academic history, and enrollment status.</p>
                </div>
                <div class="feature-card">
                    <img src="/placeholder.svg?height=100&width=100" alt="Course Management">
                    <h3>Course Management</h3>
                    <p>Organize and track courses, including schedules, syllabi, and instructor assignments.</p>
                </div>
                <div class="feature-card">
                    <img src="/placeholder.svg?height=100&width=100" alt="Grade Tracking">
                    <h3>Grade Tracking</h3>
                    <p>Record and analyze student grades, calculate GPAs, and generate transcripts with ease.</p>
                </div>
                <div class="feature-card">
                    <img src="/placeholder.svg?height=100&width=100" alt="Reporting">
                    <h3>Reporting</h3>
                    <p>Generate comprehensive reports on student performance, class statistics, and institutional metrics.</p>
                </div>
            </div>
        </section>
        <section id="testimonials" class="testimonials">
            <h2>What Our Users Say</h2>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <img src="/placeholder.svg?height=80&width=80" alt="Jane Doe">
                    <h3>Jane Doe</h3>
                    <p>"This system has revolutionized how we manage student records. It's intuitive and saves us hours of work every week."</p>
                </div>
                <div class="testimonial-card">
                    <img src="/placeholder.svg?height=80&width=80" alt="John Smith">
                    <h3>John Smith</h3>
                    <p>"The reporting features are outstanding. We can now make data-driven decisions to improve our academic programs."</p>
                </div>
                <div class="testimonial-card">
                    <img src="/placeholder.svg?height=80&width=80" alt="Emily Brown">
                    <h3>Emily Brown</h3>
                    <p>"As a student, I love being able to access my academic records and track my progress easily. It's a game-changer!"</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Resources</h3>
                <ul>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">API</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: info@sarms.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Address: 123 Education St, Academic City, AC 12345</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Student Academic Record Management System. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Portfolio</title>


    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <h1>My Portfolio</h1>
            <!-- Add a menu button for mobile -->
            <button class="menu-button" aria-label="Menu">&#9776;</button>
            <nav>
                <ul class="nav-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    
    <!-- Profile Section -->
<section id="about" class="about">
    <div class="about-container">
        <div class="profile-slider">
            <div class="slide active">
                <img src="profile/profile.jpg" alt="Profile Photo 1" class="profile-photo">
            </div>
            <div class="slide">
                <img src="profile/profile1.jpg" alt="Profile Photo 2" class="profile-photo">
            </div>
            <div class="slide">
                <img src="profile/profile2.jpg" alt="Profile Photo 3" class="profile-photo">
            </div>
            <div class="profile-name"></div>
        </div>
        
        
        <div class="about-text">
            <h2>About Me</h2>
            <p>Hello! I'm MD Sojib Farazi, an Android app developer with 2 years of experience. I specialize in building user-friendly and efficient mobile applications using the latest Android development tools and technologies. I have a strong background in Java, Kotlin, and Android Studio, and I am passionate about creating seamless mobile experiences that engage and delight users.</p>
                <p>In addition to my expertise in Android development, I also have experience in web technologies, including HTML, CSS, and JavaScript, and a keen interest in UI/UX design to ensure intuitive and visually appealing applications.</p>
        </div>
    </div>
</section>


    <!-- Work Experience Section -->
<section id="experience" class="experience">
    <h2>Work Experience</h2>

    <div class="experience-image-slider">
        <div class="experience-image">
            <img src="experience_photo/experience1.png" alt="Experience Photo 1" class="experience-photo">
            <img src="experience_photo/experience2.png" alt="Experience Photo 2" class="experience-photo">
            <img src="experience_photo/experience3.png" alt="Experience Photo 3" class="experience-photo">
        </div>
    </div>
    

    <div class="experience-container">
        <div class="experience-item">
            <h3>Frontend Developer at XYZ Company</h3>
            <p><strong>Duration:</strong> Jan 2020 - Present</p>
            <p>Developed responsive and dynamic websites using HTML, CSS, and JavaScript. Collaborated with designers and backend developers to deliver high-quality applications.</p>
        </div>
        <div class="experience-item">
            <h3>Intern at ABC Tech</h3>
            <p><strong>Duration:</strong> Jun 2019 - Dec 2019</p>
            <p>Assisted in designing and developing components for a large-scale web application. Conducted user testing and provided feedback for iterative design improvements.</p>
        </div>
    </div>
</section>



    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <h2 class="testimonials-hader">What People Say</h2>
        <div class="testimonial-wrapper">
            <div class="testimonial-container">
                <div class="testimonial">
                    <p>"Amazing work! Highly recommended."</p>
                    <div class="testimonial-author">
                        <img src="logo/parsone_logo1.png" alt="Logo for John Doe" class="testimonial-logo">
                        <span>John Doe</span>
                    </div>
                </div>
                <div class="testimonial">
                    <p>"Very professional and timely delivery."</p>
                    <div class="testimonial-author">
                        <img src="logo/parsone_logo2.png" alt="Logo for Jane Smith" class="testimonial-logo">
                        <span>Jane Smith</span>
                    </div>
                </div>
                <div class="testimonial">
                    <p>"Very professional and timely delivery."</p>
                    <div class="testimonial-author">
                        <img src="logo/parsone_logo2.png" alt="Logo for Jane Smith" class="testimonial-logo">
                        <span>Jane Smith</span>
                    </div>
                </div>
                <div class="testimonial">
                    <p>"Very professional and timely delivery."</p>
                    <div class="testimonial-author">
                        <img src="logo/parsone_logo2.png" alt="Logo for Jane Smith" class="testimonial-logo">
                        <span>Jane Smith</span>
                    </div>
                </div>

                <div class="testimonial">
                    <p>"Creative and innovative solutions."</p>
                    <div class="testimonial-author">
                        <img src="logo/parsone_logo3.jpeg" alt="Logo for Michael Lee" class="testimonial-logo">
                        <span>Michael Lee</span>
                    </div>
                </div>
                <div class="testimonial">
                    <p>"Very professional and timely delivery."</p>
                    <div class="testimonial-author">
                        <img src="logo/parsone_logo2.png" alt="Logo for Jane Smith" class="testimonial-logo">
                        <span>Jane Smith</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Team Section -->
<section id="team" class="team">
    <h2>Meet Our Team</h2>
    <!-- Scroll buttons -->
    <!-- Scroll buttons with Font Awesome icons -->
<button class="scroll-button left" onclick="scrollTeam('left')"><i class="fas fa-chevron-left"></i></button>
<button class="scroll-button right" onclick="scrollTeam('right')"><i class="fa-solid fa-chevron-right"></i></button>

    
    <div class="team-container">
        <div class="team-member">
            <img src="member/profile.jpg" alt="Jane Smith">
            <h3>Jane Smith</h3>
            <p>Backend Developer</p>
        </div>
        <div class="team-member">
            <img src="member/profile.jpg" alt="John Doe">
            <h3>John Doe</h3>
            <p>Frontend Developer</p>
        </div>
        <div class="team-member">
            <img src="member/profile.jpg" alt="John Doe">
            <h3>John Doe</h3>
            <p>Frontend Developer</p>
        </div>
        <div class="team-member">
            <img src="member/profile.jpg" alt="John Doe">
            <h3>John Doe</h3>
            <p>Frontend Developer</p>
        </div>
        <div class="team-member">
            <img src="member/profile.jpg" alt="John Doe">
            <h3>John Doe</h3>
            <p>Frontend Developer</p>
        </div>
        <div class="team-member">
            <img src="member/profile.jpg" alt="John Doe">
            <h3>John Doe</h3>
            <p>Frontend Developer</p>
        </div>
        <div class="team-member">
            <img src="member/profile.jpg" alt="John Doe">
            <h3>John Doe</h3>
            <p>Frontend Developer</p>
        </div>
        
        <!-- Add more team members as needed -->
    </div>
</section>



    <!-- Footer Section -->
<footer class="footer">
    <div class="footer-container">
        <!-- Left Section: Logo and Social Media -->
        <div class="footer-left">
        
            <div class="Footer-logo">
                <img src="logo/footer/your-logo.svg" alt="Your Logo" class="Footer-img">
                <h4 class="footer-text">Edition</h4>
            </div>
            
            <div class="social-media">
                <a href="https://www.facebook.com/Editionsojib" target="_blank" aria-label="Facebook">
                    <img src="logo/footer/Facebook_Logo.svg" alt="Facebook">
                </a>
                <a href="https://github.com/editionsojib" target="_blank" aria-label="GitHub">
                    <img src="logo/footer/github.svg" alt="GitHub">
                </a>
                <a href="https://twitter.com/sojib90795548" target="_blank" aria-label="Twitter">
                    <img src="logo/footer/Twitter_X .svg" alt="Twitter">
                </a>
                <a href="https://www.linkedin.com/in/sajib-farazi9486/" target="_blank" aria-label="LinkedIn">
                    <img src="logo/footer/linkedin.svg" alt="LinkedIn">
                </a>
            </div>
        </div>

        <!-- Center Section: Navigation Links -->
        <div class="footer-center">
            <a href="#about">About Us</a>
            <a href="contact.php">Contact Us</a>
            <a href="#support">Customer Support</a>
            <a href="#jobs">Jobs</a>
            <a href="#team">Team</a>
        </div>

        <!-- Right Section: Newsletter Signup -->
        <div class="footer-right">
            <p>Subscribe to Our Newsletter</p>
            <form action="index.php" method="post" class="newsletter-form">
            <input type="email" name="subs_email" placeholder="Enter your email" required>
            <button type="submit" name="submit">Submit</button>
            </form>

        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 MD Sojib Farazi. All Rights Reserved.</p>
    </div>
</footer>


    <script src="script.js"></script>
    
</body>
</html>


<?php 
require 'vendor/autoload.php';  // This includes PHPMailer and other libraries

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


    
if(isset($_POST['submit'])) {
    
    $email = $_POST['subs_email'];



$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'editionsojib@gmail.com';
    $mail->Password = 'jsncgimyrpagjeug';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('editionsojib@gmail.com', 'Contact');
    $mail->addAddress('editionsojib@gmail.com', 'Sojib');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Subscribe';
    $mail->Body    = "Subscribe Email = $email";
    
    $mail->send();
    echo "<div class='success'>Message has been sent!</div>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}

?>

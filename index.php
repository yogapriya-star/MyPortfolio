<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ee83a04296.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
</head>
<body>
<div class="scroll-up-btn">
    <i class="fas fa-angle-up"></i>
</div>
<nav class="navbar">
    <div class="max-width">
        <div class="logo">
            <div class="logo"><a href="#">Yoga<span>priya.</span></a></div>
        </div>
        <ul class="menu">
            <li>
                <a href="#home" class="menu-btn">Home</a>
            </li>
            <li>
                <a href="#about" class="menu-btn">About</a>
            </li>
            <li>
                <a href="#skills" class="menu-btn">Skills</a>
            </li>
            <li>
                <a href="#projects" class="menu-btn">Projects</a>
            </li>
            <li>
                <a href="#achievements" class="menu-btn">Course Works</a>
            </li>
            <li>
                <a href="#contact" class="menu-btn">Contact</a>
            </li>
        </ul>
        <div class="menu-btn">
            <i class="fa-solid fa-bars" style="color: white"></i>
        </div>
    </div>
</nav>
<!-- Home section start -->
<section class="home" id="home">
    <div class="max-width">
        <div class="home-content">
            <div class="text-1">Hello, my name is </div>
            <div class="text-2">Yogapriya Shanmugam</div>
            <div class="text-3">And, I'm a <span class="typing"></span></div>
            <a href="#contact">Hire me</a>
        </div>
    </div>
</section>
<!-- About section start -->
<section class="about" id="about">
    <div class="max-width">
        <h2 class="title">About me</h2>
        <div class="about-content">
            <div class="column left">
                <img src="assets/profilePic.jpg" alt="profile-pic">
            </div>
            <div class="column right">
                <div class="text">
                    I'm Yogapriya And I'm a <span class="typing-2"></span>
                </div>
                <p>Results driven Full Stack Developer with a passion for creating efficient and scalable code. With over 3+ years of experience in web application development. Committed to delivering high-quality solutions, I thrive in collaborative environments and am eager to contribute my skills to the success of an innovative organization. Seeking a challenging role that allows me to leverage my expertise and drive meaningful impact.</p>
                <a href="#" id="downloadLink">Download Resume</a>
            </div>
        </div>
    </div>
</section>
<!-- Skills section start-->
<section class="skills" id="skills">
    <div class="max-width">
        <h2 class="title">My Skills </h2>
        <div class="skills-content">
            <div class="column left">
                <div class="text">My creative skills and experiences.</div>
                <p>As a seasoned Software Engineer, I bring over three years of hands-on experience in web application development, with a strong focus on creating efficient and scalable code. I played a key role in implementing PHP and MySQL for backend processing and database management. Collaborating seamlessly with cross-functional teams, I integrated third-party services and APIs to enhance system functionality, prioritizing data security and privacy in compliance with industry standards. During this time, I actively participated in meetings with senior leadership, contributing to design strategy discussions and delivery goal planning. I honed my skills in version control using Git and undertook responsibilities such as code optimization, RESTful API implementation, and development of dynamic user interfaces using HTML, CSS, and JavaScript. My role involved collaborating with cross-functional teams to gather requirements, conducting code reviews, and ensuring high code quality through bug identification and resolution. Additionally, I contributed to database design, query optimization, and data modeling, working closely with product teams to align software solutions with business specifications and requirements.</p>
            </div>
            <div class="column right">
                <div class="bars">
                    <div class="info">
                        <span>HTML & CSS</span>
                        <span>95%</span>
                    </div>
                    <div class="line html"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Tailwind-CSS</span>
                        <span>90%</span>
                    </div>
                    <div class="line tailwind"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Bootstrap</span>
                        <span>95%</span>
                    </div>
                    <div class="line bootstrap"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>PHP</span>
                        <span>90%</span>
                    </div>
                    <div class="line php"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>JavaScript</span>
                        <span>80%</span>
                    </div>
                    <div class="line js"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>NodeJS</span>
                        <span>80%</span>
                    </div>
                    <div class="line nodejs"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>VueJS</span>
                        <span>85%</span>
                    </div>
                    <div class="line vuejs"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>ReactJS</span>
                        <span>80%</span>
                    </div>
                    <div class="line reactjs"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>MYSQL</span>
                        <span>90%</span>
                    </div>
                    <div class="line mysql"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Mango DB</span>
                        <span>90%</span>
                    </div>
                    <div class="line mango"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- projects section start -->
<section class="projects" id="projects">
    <div class="max-width">
        <h2 class="title">My projects</h2>
        <div class="projects-content">
            <div class="card">
                <div class="box">
                    <i class="fas fa-code"></i>
                    <div>TripAdvisor Website</div>
                    <p>TripAdvisor website is created by using HTML and CSS.</p>
                    <div class="project-button">
                        <a class="nav1 inline-links" href="https://github.com/yogapriya-star/TripAdvisor">Code </a>
                        <a class="nav2 inline-links" href="https://yogapriya-star.github.io/TripAdvisor/">Live Demo </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <i class="fas fa-code"></i>
                    <div>Greenden Website</div>
                    <p>Greenden website is created by using HTML and Tailwind-CSS.</p>
                    <div class="project-button">
                        <a class="nav1 inline-links" href="https://github.com/yogapriya-star/Greenden-Website">Code </a>
                        <a class="nav2 inline-links" href="https://yogapriya-star.github.io/Greenden-Website/">Live Demo </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <i class="fas fa-code"></i>
                    <div>Nostra Website</div>
                    <p>Nostra website is created by using HTML, Tailwind-CSS and JavaScript.</p>
                    <div class="project-button">
                        <a class="nav1 inline-links" href="https://github.com/yogapriya-star/Nostra-Website">Code </a>
                        <a class="nav2 inline-links" href="https://yogapriya-star.github.io/Nostra-Website/">Live Demo </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <i class="fas fa-code"></i>
                    <div>Perfumy Website</div>
                    <p>Perfumy Website is created by using HTML, Tailwind-CSS with ReactJS.</p>
                    <div class="project-button">
                        <a class="nav1 inline-links" href="https://github.com/yogapriya-star/PerfumyWebsite-React-JS">Code </a>
                        <a class="nav2 inline-links" href="https://perfumy-website-react-js.vercel.app/">Live Demo </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <i class="fas fa-code"></i>
                    <div>Udemy-Clone Website</div>
                    <p>Udemy-clone website is created by using HTML, Tailwind-CSS with ReactJS.</p>
                    <div class="project-button">
                        <a class="nav1 inline-links" href="https://github.com/yogapriya-star/UdemyClone-React-JS">Code </a>
                        <a class="nav2 inline-links" href="https://udemy-clone-react-js.vercel.app/">Live Demo </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <i class="fas fa-code"></i>
                    <div>Online Food-Ordering-System using PHP</div>
                    <p>The system allows users to browse the menu, place orders, and provides an admin interface.</p>
                    <div class="project-button">
                        <a class="nav1 inline-links" href="https://github.com/yogapriya-star/FoodOrderingSystem">Code </a>
                        <a class="nav2 inline-links" href="http://online-food-ordering.zya.me/">Live Demo </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Achievements Section -->
<section class="achievements" id="achievements">
    <div class="max-width">
        <h2 class="title">My Course Works</h2>
        <div class="carousel owl-carousel">
            <div class="card">
                <div class="box">
                    <img src="assets/PHP-Beginners.jpg" alt="certificate-1">
                    <p class="achive-para">PHP for Beginners</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="assets/PHP-Full-Course.jpg" alt="certificate-5">
                    <p class="achive-para">PHP Full Course</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="assets/PHP-Array.jpg" alt="certificate-6">
                    <p class="achive-para">PHP-Array</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="assets/Database-Queries.jpg" alt="certificate-7">
                    <p class="achive-para">Database-Queries</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="assets/Laravel-for-beginners.jpg" alt="certificate-2">
                    <p class="achive-para">Laravel-for-beginners</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="assets/Laravel10+vueJS.jpg" alt="certificate-3">
                    <p class="achive-para">Laravel-10+vueJS</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="assets/NEWS-Portal-website.jpg" alt="certificate-4">
                    <p class="achive-para">NEWS-Portal-website</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact section start -->
<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">Contact</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Get in Touch</div>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Name</div>
                            <div class="sub-title">Yogapriya Shanmugam</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">Trichy, Tamil Nadu, India</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="sub-title">yogapriyashanmugam1@gmail.com</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fa-brands fa-linkedin"></i>
                        <div class="info">
                            <a href="https://www.linkedin.com/in/yogapriya-shanmugam-850b43197/">yogapriya-linkedIn</a>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fa-brands fa-github"></i>
                        <div class="info">
                            <a href="https://github.com/yogapriya-star">yogapriya-github</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column right">
                <div class="text">Message me</div>
                <form id="contactForm" action="http://localhost/portfolio/process_form.php" method="post">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="field email">
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" id="subject" name="subject"  placeholder="Subject" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" id="message" name="message"  rows="10" placeholder="Your feed.." required></textarea>
                    </div>
                    <div class="button">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer section start -->
<footer>
    <span>Created By <a href="#">YogapriyaShanmugam</a> | <span class="far fa-copyright"></span> 2024 All rights reserved.</span>
</footer>
<script src="script.js"></script>
<?php
if(isset($_SESSION['message']) && $_SESSION['message'] != ''){
    ?>
    <script>
        Swal.fire({
            text: '<?php echo $_SESSION['message']; ?>',
            icon: '<?php echo $_SESSION['type']; ?>',
        });
    </script>
<?php
    unset($_SESSION['message']);
}
?>
</body>
</html>
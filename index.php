<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEK Agency</title>
    <link rel="icon" type="image/x-icon" href="img/favicon/SS-Project-favicon-dred-t-cropped.png">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php// include '../includes/header.php'; ?>

<div class="container">
    <header>
        <div class="header-wrapper">
            <div class="logo">
                <a href="#"><img src="img\logo\SS-Project-Logo-3-t.png" alt="Your Logo"></a>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="#" style="color: white;" class="grow">Home</a></li>
                    <li><a href="#about" style="color: white;" class="grow">About</a></li>
                    <li><a href="#services" style="color: white;" class="grow">Services</a></li>
                    <li><a href="#projects" style="color: white;" class="grow">Portfolio</a></li>
                    <li class="nav-button"><a href="#contact" style="color: white;">Get in touch</a></li>
                </ul>
                <div class="hamburger-menu">&#9776;</div> <!-- Hamburger menu icon -->
            </nav>
        </div>
    </header>

    <main>
        <div class="main-wrapper">
            
            <div class="banner">
                <div class="banner-wrapper">
                    <div class="banner-left">
                        <h3>Let's develop<br>Cool stuff.<br>Together.</h3>
                        <p>Years of experience in building amazing <br>web & mobile applications.</p>
                    </div>
                    <div class="banner-right">
                        <img src="img/WebAppBuilding-t.png" alt="Bigger Logo" style="background: transparent; width: 240%; margin-top: -15px;">
                        <!-- <canvas id="myCanvas" width="400" height="400" style="border:1px solid #d3d3d3;">
                        KEK Agency
                        </canvas> -->
                    </div>
                </div>
            </div>
            

            <div id="about" class="headline">
                <div class="headline-wrapper">
                    <p>We support leading brands & game-changing companies in their digital transformation.</p>
                </div>
            </div>

            <div id="services" class="services">
                <div class="services-wrapper">
                    <div class="services-left">
                        <h3>What can we help you with?</h3>
                        <p>Using our rich knowledge we gained through years of experience we are transforming the future by exploring, learning & innovating.</p>
                        <img src="img/SoftwareEngineeringGraphics1-t.png" alt="some cool engineering graphics" style="background: transparent; width: 400px; margin-bottom: -35px; margin-top: 20px;">
                    </div>
                    <div class="services-right">
                        <ul>
                            <li class="service-grow"><span>01</span><a onclick="event.preventDefault(); href="">Project planning</a></li>
                            <li class="service-grow"><span>02</span><a onclick="event.preventDefault(); href="">Engineering</a></li>
                            <li class="service-grow"><span>03</span><a onclick="event.preventDefault(); href="">Design</a></li>
                            <li class="service-grow"><span>04</span><a onclick="event.preventDefault(); href="" >Data & AI</a></li>
                            <li class="service-grow"><span>05</span><a onclick="event.preventDefault(); href="">Smart chatbots</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="projects" class="carousel-coontainer">
                <div class="carousel-wrapper">
                    <div class="carousel">
                        <div class="carousel-item active">
                            <div class="item-content">
                                <img src="img/projects/project1.webp" alt="">
                                <h2>Reducing CO2 emissions in EU education system</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item-content">
                                    <img src="img/projects/project2.webp" alt="">
                                    <h2>The ultimate AI tool for chatting with any data</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item-content">
                                    <img src="img/projects/project3.webp" alt="">
                                    <h2>Revolutionizing the world of E-mobility with Etrel.</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item-content">
                                    <img src="img/projects/project4.webp" alt="">
                                    <h2>Using the power of AI for identity verification.</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item-content">
                                    <img src="img/projects/project5.webp" alt="">
                                    <h2>Optimizing workflow & increasing productivity.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-dots"></div>
                    <button class="prev">&lt;</button>
                    <button class="next">&gt;</button>
                </div>
            </div>

            <div id="team" class="team-nums">
                <div class="team-nums-wrapper">
                    <div class="team-nums-left">
                        <img src="img/engineering-team-t.png" alt="some cool team image with many people" style="background: transparent;">
                    </div>
                    <div class="team-nums-right">
                        <h2>Our Team in Numbers.</h2>
                        <div class="number-item">
                            <p>Years of experience</p>
                            <span class="num">9+</span>
                        </div>
                        <div class="number-item">
                            <p>Age of employees</p>
                            <span class="num">~33</span>
                        </div>
                        <div class="number-item">
                            <p>Satisfied customers</p>
                            <span class="num">50+</span>
                        </div>
                        <div class="number-item">
                            <p>Skilled professionals</p>
                            <span class="num">10+</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="coffee">
                <div class="coffee-wrapper">
                    <p>Coffee?<br>Our door's always open.</p>
                </div>
            </div>

            <div id="contact" class="form-container">
                <div class="form-wrapper">
                    <form id="contact-form" action="process_form2.php" method="POST">
                        <div class="form1">
                            <div class="form1-heading">
                                <h1>You</h1>
                            </div>
                            <div class="form1-content">
                                <div class="fname">
                                    <input type="text" placeholder="First name *" value name="first_name">
                                </div>
                                <div class="lname">
                                    <input type="text" placeholder="Last name *" name="last_name">
                                </div>
                                <div class="mail">
                                    <input type="email" placeholder="Email *" name="email" value>
                                </div>
                                <div class="phone">
                                    <input type="text" placeholder="Phone *" name="phone_number" value>
                                </div>
                                <div class="source">
                                    <input type="text" placeholder="How did you hear abour us?" name="lead_source" value>
                                </div>
                            </div>
                        </div>
                        <div class="form2">
                            <div class="form2-heading">
                                <h1>Your project</h1>
                            </div>
                            <div class="form2-content">
                                <div class="form-services">
                                    <div>
                                        <input type="text" placeholder="What do you want to achieve? *" name="project_name" class="question" value>
                                    </div>
                                    <label>What services do you need? *</label>
                                    <div class="servisboxes">
                                        <div class="form-services1">
                                            <div class="service">
                                                <input type="checkbox" name="services[]" value="product strategy" id="prodStrat">
                                                <label for="prodStrat">PRODUCT STRATEGY</label>
                                            </div>
                                            <div class="service">
                                                <input type="checkbox" name="services[]" value="backend development" id="backDev">
                                                <label for="prodStrat">BACKEND DEVELOPMENT</label>
                                            </div>
                                            <div class="service">
                                                <input type="checkbox" name="services[]" value="machine learning" id="ML">
                                                <label for="ML">MACHINE LEARNING</label>
                                            </div>
                                            <div class="service">
                                                <input type="checkbox" name="services[]" value="quality assurance" id="QA">
                                                <label for="prodStrat">QUALITY ASSURANCE</label>
                                            </div>
                                        </div>
                                        <div class="form-services2">
                                            <div class="service">
                                                <input type="checkbox" name="services[]" value="ux/ui design" id="uxui">
                                                <label for="uxui">UX/UI DESIGN</label>
                                            </div>
                                            <div class="service">
                                                <input type="checkbox" name="services[]" value="mobile development" id="mobDev">
                                                <label for="mobDev">MOBILE DEVELOPMENT</label>
                                            </div>
                                            <div class="service">
                                                <input type="checkbox" name="services[]" value="data analytics" id="dataAnal">
                                                <label for="dataAnal">DATA ANALYTICS</label>
                                            </div>
                                            <div class="service">
                                                <input type="checkbox" name="services[]" value="security" id="security">
                                                <label for="security">SECURITY</label>
                                            </div>
                                        </div>
                                        <div class="form-services3">
                                            <div class="service">
                                                <input type="checkbox" name="services[]" value="frontend development" id="frontDev">
                                                <label for="frontDev">FRONTEND DEVELOPMENT</label>
                                            </div>
                                            <div class="service">
                                                <input type="checkbox" name="services[]" value="embedded development" id="embedded">
                                                <label for="embedded">EMBEDDED DEVELOPMENT</label>
                                            </div>
                                            <div class="service">
                                                <input type="checkbox" name="services[]" value="devops&support" id="dops&sprt">
                                                <label for="dops&sprt">DEVOPS & SUPPORT</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="budget">
                                    <label class="budget-label">What is your budget? *</label>
                                    <div class="budgets">
                                        <div>
                                            <input type="radio" id="50" name="budget" value="50">
                                            <label for="50">Up to 50.000e</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="100" name="budget" value="100">
                                            <label for="100">50.000e to 100.000e</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="250" name="budget" value="250">
                                            <label for="250">100.000e to 250.000e</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="over" name="budget" value="over">
                                            <label for="over">Over 250.000e</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="no" name="budget" value="no">
                                            <label for="no">Can't disclose</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="description">
                                    <textarea rows="1" cols="48" placeholder="Tell us about your project *" name="description" value></textarea>
                                </div>
                                <div class="submit">
                                    <button type="submit" value="Submit">
                                        Submit
                                        <i>-></i>
                                    </button>
                                </div>
                                <div id="form-response" class="form-response"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </main>

    <?php // include '../includes/footer.php'; ?>

    <footer>
        <div class="footer-wrapper">
            <div class="footer-content">
                <div class="footer-left">
                    <p>Tell us about your next big idea.</p>
                    <a href="#contact" class="contact-button">Contact us</a>
                </div>
                <div class="footer-right">
                    <div>
                        <p>Name</p>
                        <ul class="footer-links">
                            <!-- Navigation links -->
                            <li class="footer-link"><a href="#">Home</a></li>
                            <li class="footer-link"><a href="#">About</a></li>
                            <li class="footer-link"><a href="#">Services</a></li>
                            <li class="footer-link"><a href="#">Portfolio</a></li>
                            <li class="footer-link"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <p>Social</p>
                        <ul class="footer-links">
                            <!-- Social links (replace with actual links) -->
                            <li class="footer-link"><a href="#">Facebook</a></li>
                            <li class="footer-link"><a href="#">Twitter</a></li>
                            <li class="footer-link"><a href="#">Instagram</a></li>
                            <li class="footer-link"><a href="#">LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-line"></div>
            <div class="footer-bottom">
                <a href="#"><img src="img\logo\SS-Project-Logo-3-t.png" alt="Company Logo" class="footer-bottom-logo"></a>
                <p class="footer-bottom-text">Copyrights © 2024  KEK Agency d.o.o.</p>
                <p class="footer-bottom-text">Let's make something big.<br><span style="float:right; color:red;">Together.</span></p>
            </div>
        </div>
    </footer>
</div>

<script src="js/script.js"></script>
<script src="js/form_script.js"></script>
<script src="js/banner_animation.js"></script>

</body>
</html>

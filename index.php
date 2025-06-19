<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Environs - Environmental & Nature Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top px-0">
            <div class="container px-0">
                <div class="topbar">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8">
                            <div class="topbar-info d-flex flex-wrap">
                                <a href="#" class="text-light me-4"><i class="fas fa-envelope text-white me-2"></i>Example@gmail.com</a>
                                <a href="#" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>+01234567890</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="topbar-icon d-flex align-items-center justify-content-end">
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                                <a href="#" class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
               <nav class="navbar navbar-light bg-light navbar-expand-xl">
    <a href="index.php" class="navbar-brand ms-3">
        <h1 class="text-primary display-5">CMS</h1>
    </a>
    <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars text-primary"></span>
    </button>
    <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="#about" class="nav-item nav-link">About</a>
            <a href="#service" class="nav-item nav-link">Services</a>
            <a href="#causes" class="nav-item nav-link">LearnMore</a>
            <a href="#events" class="nav-item nav-link">Team</a>
            <!--<a href="contact.html" class="nav-item nav-link">Contact</a>-->
        </div>
        <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
<<<<<<< HEAD
            <?php
             if (!isset($_SESSION['user_id'])) {
            echo '<a href="register.php" class="btn-hover-bg btn btn-outline-primary text-primary py-2 px-4 me-3">Register</a>
            <a href="login.html" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Login</a>';
            }
            ?>
            <a href="admin_login.php" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">admin</a>

            <?php
            
            if (!isset($_SESSION['user_id'])) {
           
            } else {
                echo '<a href="complaint.html" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Complaint Now</a>';
            }
            ?>
            <!-- <a href="complaint.html" class="btn-hover-bg btn btn-primary text-white py-2 px-4  me-3">Complaint Now</a> -->
=======
            <a href="register.php" class="btn-hover-bg btn btn-outline-primary text-primary py-2 px-4 me-3">Register</a>
            <a href="login.html" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Login</a>
            <a href="complaint.html" class="btn-hover-bg btn btn-primary text-white py-2 px-4  me-3">Complaint Now</a>
>>>>>>> 1d34ab5ec8b0d4a927e060e3a8be9d39ef1cd46b
        </div>
    </div>
</nav>
            </div>
        </div>
        <!-- Navbar End -->

        
       <!-- Carousel Start -->
        <div class="container-fluid carousel-header vh-100 px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/21.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Efficient Complaint Handling</h4>
                                <h1 class="display-1 text-capitalize text-white mb-4">Streamline Your Complaints</h1>
                                <p class="mb-5 fs-5">Our system ensures quick and effective resolution of complaints, enhancing customer satisfaction and trust.</p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/22.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Customer-Centric Approach</h4>
                                <h1 class="display-1 text-capitalize text-white mb-4">Resolve Issues Seamlessly</h1>
                                <p class="mb-5 fs-5">Empower your team with tools to manage and resolve complaints efficiently, ensuring a smooth experience.</p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/23.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Track and Monitor</h4>
                                <h1 class="display-1 text-capitalize text-white mb-4">Stay Informed</h1>
                                <p class="mb-5 fs-5">Monitor complaint progress in real-time and ensure accountability with our comprehensive tracking features.</p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
        
        <!-- About Start -->
        <div class="container-fluid about py-5" id="about">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-5">
                        <div class="h-100">
                            <img src="img/24.jpg" class="img-fluid w-100 h-100" alt="Image">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <h5 class="text-uppercase text-primary">About Us</h5>
                        <h1 class="mb-4">Efficient Complaint Management System</h1>
                        <p class="fs-5 mb-4">Our system is designed to streamline complaint handling, ensuring quick resolutions and improved customer satisfaction. We aim to empower organizations with tools to manage and resolve issues effectively.</p>
                        <div class="tab-class bg-secondary p-4">
                            <ul class="nav d-flex mb-2">
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                        <span class="text-dark" style="width: 150px;">About</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                        <span class="text-dark" style="width: 150px;">Mission</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                        <span class="text-dark" style="width: 150px;">Vision</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <h5 class="text-uppercase mb-3">About Our System</h5>
                                                    <p class="mb-4">Our complaint management system is built to simplify the process of lodging, tracking, and resolving complaints. It ensures transparency and accountability at every step.</p>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane fade show p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <h5 class="text-uppercase mb-3">Our Mission</h5>
                                                    <p class="mb-4">To provide organizations with a robust platform to handle complaints efficiently, fostering trust and satisfaction among customers and stakeholders.</p>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane fade show p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <h5 class="text-uppercase mb-3">Our Vision</h5>
                                                    <p class="mb-4">To become the leading solution for complaint management, enabling organizations to build stronger relationships with their customers through effective issue resolution.</p>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


      <!-- Services Start -->
<div class="container-fluid service py-5 bg-light" id="service">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Our Services</h5>
            <h1 class="mb-0">How We Simplify Complaint Management</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="service-item">
                    <img src="img/25.jpg" class="img-fluid w-100" alt="Image">
                    <div class="service-link">
                        <a href="#" class="h4 mb-0">Streamlined Complaint Logging</a>
                    </div>
                </div>
                <p class="my-4">Easily log complaints with our user-friendly interface, ensuring no issue goes unnoticed.</p>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="service-item">
                    <img src="img/26.jpg" class="img-fluid w-100" alt="Image">
                    <div class="service-link">
                        <a href="#" class="h4 mb-0">Efficient Complaint Tracking</a>
                    </div>
                </div>
                <p class="my-4">Track the progress of complaints in real-time, ensuring transparency and accountability.</p>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="service-item">
                    <img src="img/27.jpg" class="img-fluid w-100" alt="Image">
                    <div class="service-link">
                        <a href="#" class="h4 mb-0">Automated Notifications</a>
                    </div>
                </div>
                <p class="my-4">Receive timely updates and notifications to stay informed about complaint resolutions.</p>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="service-item">
                    <img src="img/28.jpg" class="img-fluid w-100" alt="Image">
                    <div class="service-link">
                        <a href="#" class="h4 mb-0">Comprehensive Reporting</a>
                    </div>
                </div>
                <p class="my-4">Generate detailed reports to analyze trends and improve complaint resolution processes.</p>
            </div>
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-center">
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

       
<!-- Events Start -->
<div class="container-fluid event py-5"id="causes">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Upcoming Events</h5>
            <h1 class="mb-0">Join Us to Learn More About Effective Complaint Management</h1>
        </div>
        <div class="event-carousel owl-carousel">
            <div class="event-item">
                <img src="img/29.jpg" class="img-fluid w-100" alt="Image">
                <div class="event-content p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>Grand Hall, New York</span>
                        <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>15 May, 2025</span>
                    </div>
                    <h4 class="mb-4">Workshop on Complaint Resolution Strategies</h4>
                    <p class="mb-4">Learn the best practices for resolving complaints efficiently and improving customer satisfaction.</p>
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                </div>
            </div>
            <div class="event-item">
                <img src="img/30.jpg" class="img-fluid w-100" alt="Image">
                <div class="event-content p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>Conference Center, London</span>
                        <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>20 May, 2025</span>
                    </div>
                    <h4 class="mb-4">Seminar on Real-Time Complaint Tracking</h4>
                    <p class="mb-4">Discover how real-time tracking can enhance transparency and accountability in complaint management.</p>
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                </div>
            </div>
            <div class="event-item">
                <img src="img/31.jpg" class="img-fluid w-100" alt="Image">
                <div class="event-content p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>Innovation Hub, Tokyo</span>
                        <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>25 May, 2025</span>
                    </div>
                    <h4 class="mb-4">Panel Discussion: Future of Complaint Management</h4>
                    <p class="mb-4">Join industry leaders to discuss the future trends and technologies in complaint management systems.</p>
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                </div>
            </div>
            <div class="event-item">
                <img src="img/21.jpg" class="img-fluid w-100" alt="Image">
                <div class="event-content p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>Expo Center, Sydney</span>
                        <span class="text-body"><i class="fas fa-calendar-alt me-2"></i>30 May, 2025</span>
                    </div>
                    <h4 class="mb-4">Training: Automated Notifications in Complaint Handling</h4>
                    <p class="mb-4">Learn how automated notifications can improve communication and efficiency in complaint resolution.</p>
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Events End -->

       

    <!-- Volunteers Start -->
<div class="container-fluid volunteer py-5 mt-5"id="events">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="volunteer-img">
                            <img src="img/volunteers-1.jpg" class="img-fluid w-100" alt="Image">
                            <div class="volunteer-title">
                                <h5 class="mb-2 text-white">John Doe</h5>
                                <p class="mb-0 text-white">Complaint Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="volunteer-img">
                            <img src="img/volunteers-3.jpg" class="img-fluid w-100" alt="Image">
                            <div class="volunteer-title">
                                <h5 class="mb-2 text-white">Jane Smith</h5>
                                <p class="mb-0 text-white">Resolution Expert</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="volunteer-img">
                            <img src="img/volunteers-2.jpg" class="img-fluid w-100" alt="Image">
                            <div class="volunteer-title">
                                <h5 class="mb-2 text-white">Michael Lee</h5>
                                <p class="mb-0 text-white">Customer Advocate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="volunteer-img">
                            <img src="img/volunteers-4.jpg" class="img-fluid w-100" alt="Image">
                            <div class="volunteer-title">
                                <h5 class="mb-2 text-white">Emily Davis</h5>
                                <p class="mb-0 text-white">Support Coordinator</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <h5 class="text-uppercase text-primary">Join Our Team</h5>
                <h1 class="mb-4">Become a part of our mission to improve complaint management.</h1>
                <p class="mb-4">Help us create a seamless and efficient complaint resolution process. Join our team of experts and make a difference in customer satisfaction and trust.</p>
                <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Work with a dedicated and friendly team.</p>
                <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Receive free training on complaint management tools.</p>
                <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> Contribute to improving organizational processes.</p>
                <p class="text-dark"><i class="fa fa-check text-primary me-2"></i> No prior experience required.</p>
                <p class="text-dark mb-5"><i class="fa fa-check text-primary me-2"></i> Joining is completely free.</p>
                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Join With Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Volunteers End -->
       <!-- Footer Start -->
<div class="container-fluid footer bg-dark text-body py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="mb-4 text-white">Newsletter</h4>
                    <p class="mb-4">Stay updated with the latest trends and insights in complaint management. Subscribe to our newsletter today!</p>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-0 bg-secondary w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                        <button type="button" class="btn-hover-bg btn btn-primary position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Our Services</h4>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Complaint Logging</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Real-Time Tracking</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Automated Notifications</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Comprehensive Reporting</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Customer Support</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Resolution Strategies</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Our Team</h4>
                    <a href=""><i class="fas fa-angle-right me-2"></i> John Doe - Complaint Specialist</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Jane Smith - Resolution Expert</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Michael Lee - Customer Advocate</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Emily Davis - Support Coordinator</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Sarah Johnson - Data Analyst</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> David Brown - Operations Manager</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="mb-4 text-white">Our Gallery</h4>
                    <div class="row g-2">
                        <div class="col-4">
                            <div class="footer-gallery">
                                <img src="img/21.jpg" class="img-fluid w-100" alt="">
                                <div class="footer-search-icon">
                                    <a href="img/gallery-footer-1.jpg" data-lightbox="footerGallery-1" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="footer-gallery">
                                <img src="img/22.jpg" class="img-fluid w-100" alt="">
                                <div class="footer-search-icon">
                                    <a href="img/gallery-footer-2.jpg" data-lightbox="footerGallery-2" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="footer-gallery">
                                <img src="img/23.jpg" class="img-fluid w-100" alt="">
                                <div class="footer-search-icon">
                                    <a href="img/gallery-footer-3.jpg" data-lightbox="footerGallery-3" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="footer-gallery">
                                <img src="img/24.jpg" class="img-fluid w-100" alt="">
                                <div class="footer-search-icon">
                                    <a href="img/gallery-footer-4.jpg" data-lightbox="footerGallery-4" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="footer-gallery">
                                <img src="img/25.jpg" class="img-fluid w-100" alt="">
                                <div class="footer-search-icon">
                                    <a href="img/gallery-footer-5.jpg" data-lightbox="footerGallery-5" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="footer-gallery">
                                <img src="img/26.jpg" class="img-fluid w-100" alt="">
                                <div class="footer-search-icon">
                                    <a href="img/gallery-footer-6.jpg" data-lightbox="footerGallery-6" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-4 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By 
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

    </body>

</html>
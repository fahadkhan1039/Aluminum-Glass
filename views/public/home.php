<?php
include "include/header.php";
?>


<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="index-2.html">
                    <img src="<?= $env['APP_URL'] ?>assets/images/img/logo1.png" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Navbar Toggle Button (Mobile) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index-2.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Pages</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <!-- Main Menu End -->
            </div>
        </nav>
    </div>
</header>

<!-- Hero Section Start -->
<div class="hero parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp"></h3>
                        <h1 class="text-anime-style-2" data-cursor="-opaque">
                            Precision & Elegance in <span>Aluminium & Glass</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            We specialize in high-quality aluminium and glass solutions, delivering durable, stylish, and innovative designs for modern architecture.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Hero Button Start -->
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="#" class="btn-default"><span>Contact Us</span></a>
                    </div>
                    <!-- Hero Button End -->
                </div>
                <!-- Hero Content End -->
            </div>

            <div class="col-lg-12">
                <!-- Excellence Innovating List Start -->
                <div class="excellence-innovating-list wow fadeInUp" data-wow-delay="0.6s">
                    <ul>
                        <li>Advanced Manufacturing Solutions</li>
                        <li>Quality Assurance Systems</li>
                        <li>State-of-the-Art Technology</li>
                    </ul>
                </div>
                <!-- Excellence Innovating List End -->
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->


<!-- About Us Start -->
<div class="about-us">
    <div class="container">
        <!-- About Us Heading -->
        <div class="heading-container wow fadeInUp">
            <div class="line left"></div>
            <h1 class="animated-heading">About Us</h1>
            <div class="line right"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Us Image Start -->
                <div class="about-image">
                    <!-- About Image Start -->
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="<?= $env['APP_URL'] ?>assets/images/about-img-1.jpg" alt="">
                        </figure>
                    </div>
                    <!-- About Image End -->

                    <!-- About Image Start -->
                    <div class="about-img-2">
                        <figure class="image-anime reveal">
                            <img src="<?= $env['APP_URL'] ?>assets/images/about-img-2.jpg" alt="">
                        </figure>
                    </div>
                    <!-- About Image End -->

                    <!-- Company Experience Start -->
                    <div class="company-experience">
                        <div class="company-experience-counter">
                            <h2><span class="counter">25</span>+</h2>
                        </div>
                        <div class="company-experience-content">
                            <p>years of experience</p>
                        </div>
                    </div>
                    <!-- Company Experience End -->
                </div>
                <!-- About Us Image End -->
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">

                        <h2 class="text-anime-style-2" data-cursor="-opaque">Innovating with <span>Aluminium & Glass</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in providing high-quality aluminum and glass solutions that seamlessly combine durability, elegance, and modern technology. Our expert craftsmanship ensures innovative designs, energy efficiency, and long-lasting performance for residential, commercial, and industrial projects.</p>
                    </div>
                    <div class="about-content-body">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="about-list-btn">
                                    <div class="about-content-list wow fadeInUp" data-wow-delay="0.5s">
                                        <ul>
                                            <li>Premium Aluminium Framework</li>
                                            <li>High-Quality Glass Solutions</li>
                                            <li>Modern Architectural Designs</li>
                                            <li>Reliable and Efficient Services</li>
                                        </ul>
                                    </div>
                                    <div class="about-content-btn wow fadeInUp" data-wow-delay="0.75s">
                                        <a href="about.html" class="btn-default"><span>Read More</span></a>
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
<!-- About Us End -->

<!-- Our Service Start -->
<div class="our-services parallaxie">
    <div class="container">
        <div class="heading-container wow fadeInUp">
            <div class="line left"></div>
            <h1 class="animated-heading">OUR SERVICES</h1>
            <div class="line right"></div>
        </div>
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title dark-section">

                    <h2 class="text-anime-style-2" data-cursor="-opaque">
                        Premium <span>Aluminium & Glass Solutions</span>
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content dark-section wow fadeInUp" data-wow-delay="0.25s">
                    <p>We specialize in high-quality aluminium and glass solutions, including sliding windows, frameless glass partitions, custom doors, curtain walls, and durable handrails. Our services enhance modern architecture with elegance and efficiency.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>
    </div>
</div>

<!-- Our Service End -->

<?php
$services = [
    ["title" => "GLASS SLIDING WINDOWS", "icon" => "icon-glass-sliding.svg"],
    ["title" => "GLASS HNJIS WINDOWS", "icon" => "icon-glass-hinges.svg"],
    ["title" => "GLASS CURTAIN WALL ELEVATIONS", "icon" => "icon-curtain-wall.svg"],
    ["title" => "GLASS SLIDING DOORS", "icon" => "icon-sliding-door.svg"],
    ["title" => "ALUMINIUM ROOM DOORS", "icon" => "icon-room-door.svg"],
    ["title" => "ALUMINIUM BATHROOM DOORS", "icon" => "icon-bathroom-door.svg"],
    ["title" => "MAIN ENTRANCE DOORS", "icon" => "icon-main-entrance.svg"],
    ["title" => "SENSOR DOORS", "icon" => "icon-sensor-door.svg"],
    ["title" => "GLASS PARTITIONS", "icon" => "icon-glass-partition.svg"],
    ["title" => "ALUMINIUM KITCHENS", "icon" => "icon-kitchen.svg"],
    ["title" => "ROOM CABINETS", "icon" => "icon-room-cabinet.svg"],
    ["title" => "CASTING BOUNDARY WALL GATES", "icon" => "icon-boundary-gate.svg"],
    ["title" => "SS HANDRAILS", "icon" => "icon-handrails.svg"],
    ["title" => "FRAMELESS GLASS HANDRAILS", "icon" => "icon-frameless-handrail.svg"],
    ["title" => "CASTING HANDRAILS", "icon" => "icon-casting-handrail.svg"],
    ["title" => "CAR PARKINGS", "icon" => "icon-car-parking.svg"],
    ["title" => "GLASS SKYLIGHTS", "icon" => "icon-skylight.svg"],
    ["title" => "GLASS BALCONIES", "icon" => "icon-balcony.svg"],
    ["title" => "SANDWICH PANEL ALUMINIUM SERVICE BLOCK", "icon" => "icon-service-block.svg"],
    ["title" => "ALUMINIUM CABINS", "icon" => "icon-aluminium-cabin.svg"],
    ["title" => "OFFICE CLADDINGS", "icon" => "icon-office-cladding.svg"]
];
?>

<!-- Our Service List Start -->
<div class="our-services-list">
    <div class="container">
        <div class="services-wrapper">
            <div class="services-list-box">
                <?php foreach ($services as $service) { ?>
                    <div class="service-item">
                        <div class="icon-box">
                            <img src="<?= $env['APP_URL'] ?>assets/images/<?= $service['icon'] ?>" alt="">
                        </div>

                        <div class="service-body">
                            <h3><?= $service['title'] ?></h3>
                        </div>

                        <div class="service-footer">
                            <a href="service-single.html" class="service-btn">
                                <img src="<?= $env['APP_URL'] ?>assets/images/arrow-dark.svg" alt="">
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- Our Service List End -->

<!-- Our Work Section Start -->
<div class="our-projects">
    <!-- Projects Heading -->
    <div class="heading-container wow fadeInUp">
        <div class="line left"></div>
        <h1 class="animated-heading">Projects</h1>
        <div class="line right"></div>
    </div>
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Innovative <span>Aluminium & Glass Solutions</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>We deliver high-quality aluminium and glass solutions for commercial and residential projects, ensuring durability, aesthetics, and precision engineering.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Filter Navigation Start -->
                <div class="our-Project-nav wow fadeInUp" data-wow-delay="0.4s">
                    <ul>
                        <li><a href="#" class="active-btn" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".facades">Aluminium Facades</a></li>
                        <li><a href="#" data-filter=".glass-partitions">Glass Partitions</a></li>
                        <li><a href="#" data-filter=".windows">Windows & Doors</a></li>
                        <li><a href="#" data-filter=".railing">Glass Railings</a></li>
                        <li><a href="#" data-filter=".cladding">Aluminium Cladding</a></li>
                    </ul>
                </div>
                <!-- Filter Navigation End -->
            </div>

            <div class="col-lg-12">
                <!-- Project Items Start -->
                <div class="row project-item-boxes align-items-center">

                    <div class="col-md-6 project-item-box facades">
                        <div class="project-item wow fadeInUp">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/img/facade.jpg" alt="Aluminium Facade">
                                </figure>
                            </div>
                            <div class="project-tag">
                                <a href="project-single.html">Aluminium Facades</a>
                            </div>
                            <div class="project-content">
                                <h3><a href="project-single.html">High-Rise Glass & Aluminium Curtain Wall</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 project-item-box glass-partitions">
                        <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/img/glass-partition.jpg" alt="Glass Partition">
                                </figure>
                            </div>
                            <div class="project-tag">
                                <a href="project-single.html">Glass Partitions</a>
                            </div>
                            <div class="project-content">
                                <h3><a href="project-single.html">Office Glass Partition Systems</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 project-item-box windows">
                        <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/img/window.jpg" alt="Windows & Doors">
                                </figure>
                            </div>
                            <div class="project-tag">
                                <a href="project-single.html">Windows & Doors</a>
                            </div>
                            <div class="project-content">
                                <h3><a href="project-single.html">Premium Aluminium Sliding Doors & Windows</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 project-item-box railing">
                        <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/img/glass-railing.jpg" alt="Glass Railings">
                                </figure>
                            </div>
                            <div class="project-tag">
                                <a href="project-single.html">Glass Railings</a>
                            </div>
                            <div class="project-content">
                                <h3><a href="project-single.html">Frameless Glass Balcony & Stair Railings</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 project-item-box cladding">
                        <div class="project-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="project-image">
                                <figure class="image-anime">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/img/aluminium-cladding.jpg" alt="Aluminium Cladding">
                                </figure>
                            </div>
                            <div class="project-tag">
                                <a href="project-single.html">Aluminium Cladding</a>
                            </div>
                            <div class="project-content">
                                <h3><a href="project-single.html">Energy-Efficient Aluminium Panel Cladding</a></h3>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Project Items End -->
            </div>
        </div>
    </div>
</div>

<!-- Our Work Section End -->
<!-- Our Story Start -->
<div class="our-story">
    <div class="container">
        <div class="heading-container wow fadeInUp">
            <div class="line left"></div>
            <h1 class="animated-heading">Our Story</h1>
            <div class="line right"></div>
        </div>
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section1-title">

                    <h2 class="text-anime-style-2" data-cursor="-opaque">
                        Transforming spaces <span>with premium aluminium & glass solutions</span>
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Our Story Header Image Start -->
                <div class="our-story-header-img">
                    <figure class="reveal image-anime">
                        <img src="<?= $env['APP_URL'] ?>assets/images/img/aluminium-2.webp" alt="Aluminium Glass Work">
                    </figure>

                    <figure class="reveal image-anime">
                        <img src="<?= $env['APP_URL'] ?>assets/images/img/hero-bg.jpg" alt="Glass Installation">
                    </figure>
                </div>
                <!-- Our Story Header Image End -->
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Our Story Image Start -->
                <div class="our-story-img">
                    <figure class="reveal image-anime">
                        <img src="<?= $env['APP_URL'] ?>assets/images/img/hero-bg.jpg" alt="Modern Glass Design">
                    </figure>
                </div>
                <!-- Our Story Image End -->
            </div>

            <div class="col-lg-6">
                <div class="our-story-content">
                    <div class="our-story-content-body">
                        <p>We specialize in premium aluminium and glass solutions, delivering modern, energy-efficient designs for commercial and residential spaces. Our expertise in structural glazing, aluminum windows, glass facades, and partitions enhances aesthetics and functionality.</p>
                    </div>

                    <div class="our-story-counters">
                        <!-- Our Story Counter Start -->
                        <div class="our-story-counter">
                            <h3><span class="counter">500</span>+</h3>
                            <p>Completed Projects</p>
                        </div>
                        <!-- Our Story Counter End -->

                        <!-- Our Story Counter Start -->
                        <div class="our-story-counter">
                            <h3><span class="counter">300</span>+</h3>
                            <p>Satisfied Clients</p>
                        </div>
                        <!-- Our Story Counter End -->

                        <!-- Our Story Counter Start -->
                        <div class="our-story-counter">
                            <h3><span class="counter">10</span>+</h3>
                            <p>Years of Excellence</p>
                        </div>
                        <!-- Our Story Counter End -->
                    </div>

                    <!-- Our Story Intro Video Start -->
                    <div class="our-story-intro-video">
                        <!-- Our Story Client Image Start -->
                        <div class="our-story-client-img">
                            <!-- Client Image Start -->
                            <div class="client-image">
                                <figure class="image-anime reveal">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/story-client-img-1.jpg" alt="Client Project 1">
                                </figure>
                            </div>
                            <!-- Client Image End -->

                            <!-- Client Image Start -->
                            <div class="client-image">
                                <figure class="image-anime reveal">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/story-client-img-2.jpg" alt="Client Project 2">
                                </figure>
                            </div>
                            <!-- Client Image End -->

                            <!-- Client Image Start -->
                            <div class="client-image">
                                <figure class="image-anime reveal">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/story-client-img-3.jpg" alt="Client Project 3">
                                </figure>
                            </div>
                            <!-- Client Image End -->
                        </div>
                        <!-- Our Story Client Image End -->

                        <!-- Intro Video Box Start -->
                        <div class="intro-video-box">
                            <!-- Video Play Button Start -->
                            <div class="video-play-button">
                                <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                                <p>Watch Our Work</p>
                            </div>
                            <!-- Video Play Button End -->
                        </div>
                        <!-- Intro Video Box End -->
                    </div>
                    <!-- Our Story Intro Video End -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Story End -->

<!-- What We Do Start -->
<!-- <div class="what-we-do">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-6">
            
                <div class="what-we-do-content">
                    
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">what we do</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Innovative factory and industry <span>solutions today</span></h2>
                    </div>
                    

                    
                    <div class="what-we-do-list">
                        <div class="what-we-do-list-box-1">
                            
                            <div class="what-we-do-item">
                                <div class="icon-box">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/icon-who-we-do-1.svg" alt="">
                                </div>
                                <div class="what-we-item-content">
                                    <h3>automation solutions</h3>
                                    <p>Streamlining processes through cutting-edge technology.</p>
                                </div>
                            </div>
                            

                            
                            <div class="what-we-do-item">
                                <div class="icon-box">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/icon-who-we-do-2.svg" alt="">
                                </div>
                                <div class="what-we-item-content">
                                    <h3>quality control</h3>
                                    <p>Ensuring product excellence through rigorous testing.</p>
                                </div>
                            </div>
                            
                        </div>

                        <div class="what-we-do-list-box-2">
                            
                            <div class="what-we-do-item">
                                <div class="icon-box">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/icon-who-we-do-3.svg" alt="">
                                </div>
                                <div class="what-we-item-content">
                                    <h3>process engineering</h3>
                                    <p>Ensuring product excellence through rigorous testing.</p>
                                </div>
                            </div>
                            

                            
                            <div class="what-we-do-item">
                                <div class="icon-box">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/icon-who-we-do-4.svg" alt="">
                                </div>
                                <div class="what-we-item-content">
                                    <h3>product development</h3>
                                    <p>Streamlining processes through cutting-edge technology.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    

                    
                    <div class="what-we-do-footer">
                        <p>Lorem ipsum is a placeholder text commonly used <span>to demonstrate</span></p>
                    </div>
                    
                </div>
                
            </div>

            <div class="col-lg-6">
                
                <div class="what-we-do-image">
                    <figure class="image-anime">
                        <img src="<?= $env['APP_URL'] ?>assets/images/what-we-do-image.jpg" alt="">
                    </figure>

                    
                    <div class="contact-now-circle">
                        <img src="<?= $env['APP_URL'] ?>assets/images/contact-now-circle.svg" alt="">
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div> -->
<!-- What We Do End -->



<!-- Our Process Section Start -->
<!-- <div class="our-process">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                 Section Title Start 
                <div class="section-title">
                    <h3 class="wow fadeInUp">our process</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Streamlined processes <span>for optimal efficiency</span></h2>
                </div>
              
            </div>

            <div class="col-lg-6">
               
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>Our process is designed to maximize efficiency and quality at every stage of production. By integrating advanced technologies and best practices, we ensure seamless workflows.</p>
                </div>
             
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
              
                <div class="our-process-image">
                    <figure class="image-anime reveal">
                        <img src="<?= $env['APP_URL'] ?>assets/images/our-process-image.jpg" alt="">
                    </figure>
                </div>
              
            </div>

            <div class="col-lg-6">
               
                <div class="process-steps-box">
            
                <div class="process-step-item wow fadeInUp">
                        <div class="process-step-no">
                            <h2>01</h2>
                        </div>
                        <div class="process-step-content">
                            <h3>understanding your needs</h3>
                            <p>We begin by thoroughly assessing your requirements and objectives to develop a tailored approach.</p>
                        </div>
                    </div>
                  

                  
                    <div class="process-step-item active wow fadeInUp" data-wow-delay="0.25s">
                        <div class="process-step-no">
                            <h2>02</h2>
                        </div>
                        <div class="process-step-content">
                            <h3>design and planning</h3>
                            <p>Our team collaborates to create detailed project plans, ensuring all aspects of the process.</p>
                        </div>
                    </div>
             
                    <div class="process-step-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="process-step-no">
                            <h2>03</h2>
                        </div>
                        <div class="process-step-content">
                            <h3>implementation</h3>
                            <p>Utilizing advanced technologies and skilled personnel, we execute the project</p>
                        </div>
                    </div>
                 
                </div>
          
            </div>
        </div>
    </div>
</div> -->
<!-- Our Process Section End -->

<!-- Our Testimonial Section Start -->
<!-- <div class="our-testimonial">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
             
                <div class="our-testimonial-image">
                    <figure class="image-anime reveal">
                        <img src="<?= $env['APP_URL'] ?>assets/images/testimonial-image.jpg" alt="">
                    </figure>
                </div>
               
            </div>

            <div class="col-lg-6">
               
                <div class="our-testimonial-content">
                 
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our client say</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">What our satisfied clients <span>are saying</span></h2>
                    </div>
              
                     <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                         
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>"The team's attention to detail and commitment to quality exceeded our expectations. They delivered on time, and their innovative solutions improved our production efficiency by 30%. Highly recommended!"</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="<?= $env['APP_URL'] ?>assets/images/author-1.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Brooklyn Simmons</h3>
                                                <p>Homeowner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>"The team's attention to detail and commitment to quality exceeded our expectations. They delivered on time, and their innovative solutions improved our production efficiency by 30%. Highly recommended!"</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="<?= $env['APP_URL'] ?>assets/images/author-2.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>albert flores</h3>
                                                <p>senior engineer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div>
                        </div>
                    </div>
                 
                </div>
          
            </div>

            <div class="col-lg-12">
              
                <div class="testimonial-company-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                           
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/company-logo-1.svg" alt="">
                                </div>
                            </div>
                          
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/company-logo-2.svg" alt="">
                                </div>
                            </div>
                        
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/company-logo-3.svg" alt="">
                                </div>
                            </div>
                         
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/company-logo-4.svg" alt="">
                                </div>
                            </div>
                         
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/company-logo-5.svg" alt="">
                                </div>
                            </div>
                          
                            <div class="swiper-slide">
                                <div class="company-logo">
                                    <img src="<?= $env['APP_URL'] ?>assets/images/company-logo-1.svg" alt="">
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div> -->
<!-- Our Testimonial Section End -->

<!-- Our Blog Section Start -->
<div class="our-blog">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-5">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">latest blog</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Exploring the world of <span>Aluminum & Glass</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-7">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>Stay updated with the latest trends, innovations, and expert insights in the aluminum and glass industry.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <figure>
                            <a href="blog-single.html" class="image-anime" data-cursor-text="View">
                                <img src="<?= $env['APP_URL'] ?>assets/images/blog-1.jpg" alt="">
                            </a>
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="blog-single.html">The Future of Glass Facades: Trends & Innovations</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Button Start -->
                        <div class="post-item-btn">
                            <a href="blog-single.html"><img src="<?= $env['APP_URL'] ?>assets/images/arrow-white.svg" alt=""></a>
                        </div>
                        <!-- Post Item Button End -->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <figure>
                            <a href="blog-single.html" class="image-anime" data-cursor-text="View">
                                <img src="<?= $env['APP_URL'] ?>assets/images/blog-2.jpg" alt="">
                            </a>
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Item Body Start -->
                    <div class="post-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h2><a href="blog-single.html">Why Aluminum is the Future of Sustainable Architecture?</a></h2>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Post Item Button Start -->
                        <div class="post-item-btn">
                            <a href="blog-single.html"><img src="<?= $env['APP_URL'] ?>assets/images/arrow-white.svg" alt=""></a>
                        </div>
                        <!-- Post Item Button End -->
                    </div>
                    <!-- Post Item Body End -->
                </div>
                <!-- Post Item End -->
            </div>
        </div>
    </div>
</div>

<!-- Our Blog Section End -->

<!-- Footer Start -->
<?php
include "include/footer.php";
?>
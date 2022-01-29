<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" href="<?=$this->config->config['base_url']?>assets/images/favicon.png" type="image/x-icon" />
    <!-- Theme tittle -->
    <title> Welcome - Gold Digger Network</title> 
    
    <link href="<?=$this->config->config['base_url']?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$this->config->config['base_url']?>assets/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?=$this->config->config['base_url']?>assets/vendors/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?=$this->config->config['base_url']?>assets/vendors/wow-js/animate.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Red+Hat+Display:wght@400;500;700;900&family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="<?=$this->config->config['base_url']?>assets/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=$this->config->config['base_url']?>assets/vendors/magnific-popup/magnific-popup.min.css" rel="stylesheet">


    <link rel="apple-touch-icon" sizes="180x180" href="<?=$this->config->config['base_url']?>assets/images/favico/apple-touch-icon.png">
    
<link rel="icon" type="image/png" sizes="32x32" href="<?=$this->config->config['base_url']?>assets/images/favico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=$this->config->config['base_url']?>assets/images/favico/favicon-16x16.png">
<link rel="manifest" href="<?=$this->config->config['base_url']?>assets/images/favico/site.webmanifest">      


    <!-- Theme style CSS -->      
    <link href="<?=$this->config->config['base_url']?>assets/css/style.css" rel="stylesheet">
</head>
<body>  
    

        
        <!-- header start  -->
        <header class="main-header">
            <div class="container">
                <div class="top-header">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="topbar-left">
                                <li><a href="<?=$this->config->config['base_url']?>index" class="brand"><img src="<?=$this->config->config['base_url']?>assets/images/goaldig1.1.png" alt="img" width="25%"></a></li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <ul class="topbar-left">
                                
                                <li><a href="mailto:info@goaldiggernetwork.ng"><span><i class="fa fa-envelope"></i></span> info@goaldiggernetwork.ng</a></li>
                                <li><a href="tel: +234 818 3749 812"><span class="phone"><i class="fa fa-phone"></i></span>+234 818 3749 812</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="topbar-right">
                                
                                <li><a target="_blank" href="https://www.facebook.com/goaldiggerNG"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/company/goal-digger-ng/"><i class="fab fa-linkedin-in"></i></a></li>
                                <!-- <li ><a href=""><i class="fab fa-twitter"></i></a></li> -->
                                <li ><a target="_blank" href="https://www.instagram.com/goaldigger_ng/"><i class="fab fa-instagram"></i></a></li>
                                <!-- <li><a href=""><span><i class="fa fa-user"></i></span> Sign in </a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="nav-inner">
                        <a href="" class="brand"><img src=""  width="25%"></a>
                        <ul class="desktop-menu">

                            <li><a class="active" href="#home">Home</a>                                
                            </li>                            
                            <li><a href="#about">About Us</a></li>
                            <!-- <li><a href="#focus">Focus</a>                                -->
                            </li>
                            <li><a href="#event">Events</a></li>
                            <li><a href="<?=$this->config->config['base_url']?>membership">Membership Plans</a></li>
                            <li><a href="<?=$this->config->config['base_url']?>login"><span><i class="fa fa-user"></i></span> Member Login</a></li>

                        </ul>
                        <div class="mobile-header">
                            <!-- <a href="#" class="search_btn"><i class="far fa-search"></i></a> -->
                            <div class="menu-icon">
                                <div class="open-menu"><i class="far fa-bars"></i></div>
                                <div class="close-menu"><i class="far fa-times"></i></div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="mobile-menu">
                    <ul>
                        <li><a class="active" href="#home">Home</a></li>                        
                        <li><a href="#about">About Us</a></li>
                        <!-- <li><a href="#focus">focus</a></li> -->
                        <li><a href="#event">Events</a></li>
                        <li><a href="<?=$this->config->config['base_url']?>membership">Membership Plans</a></li>
                        <li><a href="<?=$this->config->config['base_url']?>login"><span><i class="fa fa-user"></i></span> Member Login </a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- search modal start  -->
        <!-- <div class="search_overlay"></div>
        <div class="search_close">
            <i class="fa fa-times"></i>
        </div>
        <div class="search_modal">
            <form class="input_box">
                <div class="form-wraper">
                    <input type="email" placeholder="Search here">
                    <button class="theme-btn" type="button"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div> -->
        <!-- search modal start  -->

        <!-- header end  -->

        <section class="banner_section banner_section">
            <!-- data-bs-ride="carousel" -->
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="slider-area">
                                <div class="item">
                                    <div class id="home">
                                        <h4 class="text-center text-light wow fadeInDown" >WELCOME TO </h4>
                                        <h1 class="text-center text-light wow fadeInDown" >GOAL DIGGER PROFESSIONAL NETWORK</h1>
                                        <p class="text-light text-center" style="font-size:20px;"><cite>"You are the average of the five people you spend the most time with"</cite> -Jim Rohn</p>
                                    </div>
                                    <br><br>
                                    <!-- <div class="row align-items-center">                                        
                                        <div class="col-lg-5">
                                            <div class="left-content">                                                                                              
                                            <p class="wow fadeInUp justi" data-wow-delay="0.5s">The law of averages as summed up in those words by motivational speaker and world-renowned author, Jim Rohn, holds true in all aspects of one’s life. The quality of the people that we hang out with constantly has a direct impact on what we become, in our careers also.</p>

                                                <a href="<?=$this->config->config['base_url']?>login" class="theme_btn">Register Now <span><i class="fal fa-long-arrow-right"></i></span></a>
                                               
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="right-side-images wow fadeInRight" data-wow-delay="0.6s">
                                                <img src="<?=$this->config->config['base_url']?>assets/images/goald.png" alt="img">
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    

                    </div>                    

                   
                </div>                
            </div>
        </section>

        <!-- about-section start  -->
        <section class="about-section about_two_page">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="left-content">
                            <div class="heading-title" id="about">                                
                                <h2>About Goal Digger Network</h2>
                                <p>We are a group of professionals who have come together for Career and Personal Development. We are passionate about developing our leadership potentials and leveraging each other’s knowledge, expertise, and experiences to improve ourselves to become valuable members of our organizations and society at large. <br>                                
                                </p>
                            </div>

                            <div class="heading-title" id="about">                                
                                <h2>Our Vision</h2>
                                <p>To develop conscious leaders who will make a difference at work and in life.</p>
                            </div>

                            <div class="heading-title" id="about">                                
                                <h2>Who We Are</h2>
                                <p>We are a diverse group of intentional individuals; career professionals (Entry, Mid & Senior-level), and entrepreneurs who have come together seeking opportunities to learn in order to take our careers and businesses to a higher level.</p>
                            </div>                                                                                                           
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="right-side">

                            <img src="<?=$this->config->config['base_url']?>assets/images/goald.png" style="border-radius:20px;" alt="img">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end  -->

<section class="MoneyPro-history">
            <div class="container">
                <div class="heading-title">
                    
                    <h2>What you get access to as members of GDPN</h2>                    
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="media">
                                <div class="content">
                                    <h3 class="text-center">Build quality network and increase your social capital</h3>                                    
                                </div>
                                <div class="media-body">
                                    <div class="icon">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="media">
                                <div class="content">
                                    <h3 class="text-center">Get timely and useful industry updates, trends, research or innovations</h3>                                    
                                </div>
                                <div class="media-body">
                                    <div class="icon">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="media">
                                <div class="content">
                                    <h3 class="text-center">Skills upgrade and capacity development Programmes</h3>                                    
                                </div>
                                <div class="media-body">
                                    <div class="icon">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="images">
                            <img src="<?=$this->config->config['base_url']?>assets/images/we.jpg" alt="img">
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="item right_item">
                            <div class="media">
                                <div class="icon">                                    
                                </div>
                                <div class="media-body">
                                    <div class="content">
                                        <h3 class="text-center">Mentorship, and coaching and sponsorship</h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item right_item">
                            <div class="media">
                                <div class="icon">
                                    
                                </div>
                                <div class="media-body">
                                    <div class="content">
                                        <h3 class="text-center">Goal Digger Marketplace</h3>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item right_item">
                            <div class="media">
                                <div class="icon">                                    
                                </div>
                                <div class="media-body">
                                    <div class="content">
                                        <h3 class="text-center">Access to career advancing resources, and events</h3>
                                        <!-- <p>When you decide to go into business for, you need to make sure all your bases.</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <!-- Calculate section start  -->
    <section class="calculate-section calculate_page-two">
        <div class="container">
            <div class="heading-title"> 
                              
                <h2 class="text-light headl">Other benefits of membership</h2>
                <p class="text-light justi">We offer growth and development opportunities through various seminars (or webinars), courses, learning sessions, annual workshops, conferences, book reviews and recommendations, and daily updates. Through all of these, members can broaden their knowledge, deepen and strengthen their skills, and develop in-demand skills.</p>
                <br><br>
                <p class="text-light justi">Our website is enriched with a wholesome catalogue of resources open exclusively to our registered members. Our members also enjoy discounted access to events, quality research and commentary on career issues, and peer consultations on unique challenges and generating meaningful feedbacks.</p>
            </div>
        </div>
    </section>
    <!-- Calculate section end  -->



    

        <!-- counterup-section start  -->
        <section class="counterup-section">
            <div class="container">
                <div class="heading-title" id="event">                    
                    <h2>Our Regular Events</h2>                   
                </div>
                <div class="row align-items-center">
                    <!-- <div class="col-lg-4">
                        <div class="images">

                            <img src="<?=$this->config->config['base_url']?>assets/images/webt.jpg" alt="img">
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="row ">
                            <div class="col-6">
                                <div class="item">
                                    <img src="<?=$this->config->config['base_url']?>assets/images/grow.png" alt="img" style="width:20%;">
                                    <h5>Annual Career workshop</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <img src="<?=$this->config->config['base_url']?>assets/images/know.png" alt="img" style="width:20%;">
                                    <h5>Book Review Session</h5>                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item">
                                    <img src="<?=$this->config->config['base_url']?>assets/images/goalset.jpg" alt="img" style="width:20%;">
                                    <h5>Annual Goal Setting Workshop</h5>                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item ">
                                    <img src="<?=$this->config->config['base_url']?>assets/images/networkin.png" alt="img" style="width:20%;">
                                    <h5>Quarterly Networking Opportunities</h5>                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="item ">
                                    <img src="<?=$this->config->config['base_url']?>assets/images/knowsha.jpg" style="width:15%;" alt="img">
                                    <h5>Quarterly Knowledge Sharing System with Industry Experts</h5>                                    
                                </div>
                            </div>
                            <div class="col">
                                <div class="item ">
                                    <img src="<?=$this->config->config['base_url']?>assets/images/sharingses.jpg" style="width:20%;" alt="img">
                                    <h5>Monthly Knowledge Sharing Session</h5>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counterup-section end  -->



           

    
            



    
    <!-- Testimoinals section start  -->
    <section class="testimonials-section_two">
        <div class="container">
            <div class="heading-title">                
                <!-- <h2>Testimonials</h2>                 -->
            </div>
            <!-- <div class="testimonial_wraper_two owl-carousel">
                <div class="item">                   
                    <p>We welcome all growth minded individuals dedicated to taking all available opportunities to equip themselves for doing excellently in their chosen career.</p>                   
                </div>
                <div class="item">
                    
                    <p>We welcome individuals who seek opportunities to develop relevant skills, build a strong network, and work towards personal development.</p>                    
                </div>
                <div class="item">                    
                    <p>We welcome professionals who are seeking opportunities to create impact in the society through giving material and other possession for philanthropic activities.</p>                    
                </div>
                <div class="item">                    
                    <p>We welcome experienced individuals, who are committed to providing useful templates to upcoming professionals in their career journey through mentorship, coaching and sponsorship.</p>                    
                </div>
                <div class="item">                    
                    <p>We welcome all growth minded professionals, willing to broaden their horizon in their fields as to what is possible. These individuals are willing to commit their time, talent and resources to advancing themselves and others.</p>                    
                </div>
            </div> -->
            <div class="text-center">
                <a href="<?=$this->config->config['base_url']?>membership" class="theme_btn btn-warning btn text-light btn-lg buton">Register With Us Now!</a>
            </div>
        </div>
    </section>
    <!-- Testimoinals section end  -->



    
  

    

    <!-- footer  section start  -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-item">
                        <h3 >Gold Digger Network</h3>
                        <!-- <a href="" class="logo"><img src="<?=$this->config->config['base_url']?>assets/images/goaldig1.png" alt="img" width="20%"></a> -->
                        <p class="text-light">We are a group of professionals who have come together for Career and Personal Development. We are passionate about developing our leadership potentials and leveraging each other’s knowledge, expertise, and experience to improve ourselves to become valuable members of our organizations and society at large.</p>
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <!-- <li ><a href=""><i class="fab fa-twitter"></i></a></li> -->
                            <li ><a href=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-item">
                        <h3>Useful Link</h3>
                        <ul>                          
                            <li><a href="<?=$this->config->config['base_url']?>login"><i class="fal fa-angle-right"></i>MEMBER LOGIN</a></li>
                            <li><a href="<?=$this->config->config['base_url']?>membership"><i class="fal fa-angle-right"></i>REGISTER NOW</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-item contact_item">
                        <h3>Contact Info</h3>
                        <ul>                            
                            <li><a><i class="fas fa-phone-volume"></i>+234 818 3749 812</a></li>
                            <li><a><i class="far fa-envelope"></i>info@goaldiggernetwork.ng</a></li>
                            <li><a><i class="fas fa-globe" target="_blank"></i>www.goaldiggernetwork.ng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-item footer-gallery">
                        <h3>Newsletter</h3>
                        <form>
                            <input type="email" placeholder="Enter your email*">
                            <button type="submit" class="theme_btn">Subscribe <i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="bottom-left">
                    <span>Copyright &copy; <a href="">GOAL DIGGER NETWORK</a> 2022. All rights reserved</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer  section end  -->

















    
    <!-- jQuery v3.5.1 -->
    <script src="<?=$this->config->config['base_url']?>assets/js/jquery-3.5.1.min.js"></script> 
    <!-- Bootstrap v5.0 -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Extra Plugin -->
    <script src="<?=$this->config->config['base_url']?>assets/vendors/wow-js/wow.min.js"></script>   
    <script src="<?=$this->config->config['base_url']?>assets/vendors/counterup/jquery.waypoints.min.js"></script> 
    <script src="<?=$this->config->config['base_url']?>assets/vendors/counterup/jquery.counterup.min.js"></script>  
    <script src="<?=$this->config->config['base_url']?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>  
    <script src="<?=$this->config->config['base_url']?>assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>  
    <script src="<?=$this->config->config['base_url']?>assets/vendors/swiper/swiper-bundle.min.js"></script>  
    
    <!-- Theme js / Custom js -->
    <script src="<?=$this->config->config['base_url']?>assets/js/theme.js"></script>
</body>
</html>


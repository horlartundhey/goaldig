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
     <section class="pricing-section">
        <div class="container">
            <div class="heading-title">
               
                <h2 class="wow fadeInDown">Start your journey to building Personal and Professional Growth by being a part of our community.</h2>                
            </div>
            
              <div class="tab-content" id="pills-tabContent1">
                <div class="tab-pane fade show active" id="pills-home1" style="overflow: visible;">
                    <div class="row">
						<?php foreach($plans as $plan){
								$features = explode(",",$plan['features']);
						?>
                        <div class="col-lg-4">
                            <div class="pracing-item ">
                                <div class="top-left">                                    
                                </div>
                                <div class="top-area">

                                    <img src="<?=$this->config->config['base_url']?>assets/images/<?=$plan['logo']?>" alt=""  style="width:20%;border-radius:50%;">
                                    <p><?=$plan['name']?></p>
                                </div>
                                <ul>
                                   <strong style="font-size:25px;color:#00000; ">N<?=number_format($plan['price'],2)?> PER ANNUM</strong></li>
                                    <br><br>
									<?php foreach($features as $feature){?>
                                    <li><span><i class="fal fa-check"></i></span><?=$feature?></li>
                                    <?php } ?>
                                </ul>

                                <a href="<?=$this->config->config['base_url']?>register?id=<?=$plan['id']?>" class="buy-now ">Sign Up Now</a>

                            </div>
                        </div>
						<?php } ?>
                  
                        
                    </div>
                </div>
                
              </div>
        </div>
    </section>

         <!-- footer  section start  -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="footer-item">
                        <h3 >Gold Digger Network</h3>
                        <!-- <a href="" class="logo"><img src="<?=$this->config->config['base_url']?>assets/images/goaldig1.png" alt="img" width="20%"></a> -->
                        <p class="text-light">We are a group of professionals who have come together for Career and Personal Development. We are passionate about developing our leadership potentials and leveraging each other???s knowledge, expertise, and experience to improve ourselves to become valuable members of our organizations and society at large.</p>
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
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-item contact_item">
                        <h3>Contact Info</h3>
                        <ul>                            
                            <li><a><i class="fas fa-phone-volume"></i>+234 705 439 4331</a></li>
                            <li><a><i class="far fa-envelope"></i>info@goaldiggernetwork.ng</a></li>
                            <li><a><i class="fas fa-globe" target="_blank"></i>www.goaldiggernetwork.ng</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="footer-item footer-gallery">
                        <h3>Newsletter</h3>
                        <form>
                            <input type="email" placeholder="Enter your email*">
                            <button type="submit" class="theme_btn">Subscribe <i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div> -->
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


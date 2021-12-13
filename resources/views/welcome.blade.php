<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title> Perk Prime </title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="/"><img src="img/core-img/logo.png" alt="" width="130px" height="80px"></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="D49 Extension, Efab Plaza Area 11, Garki Abuja"><img src="img/core-img/placeholder.png" alt=""> <span>C38 Extension, Efab Plaza Area 11, Garki Abuja </span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="info@perkprime.com.ng"><img src="img/core-img/message.png" alt=""> <span>info@perkprime.com.ng</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">About us</a>
                                        <ul class="dropdown">
                                            <li><a href="/mission">Who we are</a></li>
                                                <li><a href="/management">Managment Team</a></li>             
                                        </ul>
                                     </li>

                                    <li><a href="/product">Products</a></li>
                                    <li><a href="/faq">FAQ</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                    @if (Route::has('login'))
                                     @auth
                                    <li><a href="/home">Dashboard</a></li>

                            <li><a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Log Out</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     {{ csrf_field() }}
                                     </form>


                                    @else
                                    <li><a href="/register">Register</a></li>
                                    <li><a href="/login">Sign in</a></li>
                                     @endauth
                                    @endif
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img src="img/core-img/call2.png" alt="">08153239744</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="hero-slideshow owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Over 2 years in Lending</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">get your <span>loan</span> now </h2>
                                <p data-animation="fadeInUp" data-delay="500ms">Getting loans to solve immediate problem is made easy, you can request for loan facility from the comfort of your device. It's Faster, Easier and Better.</p>
                                <a href="/register" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

           

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Over 2 years in business</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">get your <span>loan</span> now </h2>
                                <p data-animation="fadeInUp" data-delay="500ms">Getting loans to solve immediate problem is made easy now. Just ask and it shall be given like the word of the lord. From the comfort of your device request for your facility. It's Faster, Easier and Better.</p>
                                <a href="/register" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide bg-img">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/bg-img/5.jpg);"></div>
                <!-- Welcome Text -->
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInDown" data-delay="100ms">Over 2 years Of Success Record</h6>
                                <h2 data-animation="fadeInDown" data-delay="300ms">get your <span>loan</span> now </h2>
                                <p data-animation="fadeInDown" data-delay="500ms">Getting loans to solve immediate problem is made easy now. Just ask and it shall be given like the word of tha lord. From the comfort of your device request for your facility. It's Faster, Easier and Better.</p>
                                <a href="/register" class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide Duration Indicator -->
                <div class="slide-du-indicator"></div>
            </div>

        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

 

    <!-- ##### Call To Action Start ###### -->
    <section class="cta-area d-flex flex-wrap">
        <!-- Cta Thumbnail -->
        <div class="cta-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/5.jpg);"></div>

        <!-- Cta Content -->
        <div class="cta-content">
            <!-- Section Heading -->
            <div class="section-heading white">
                <div class="line"></div>
                <p>Empowering | Professionals Advice | Business</p>
                <h2>Impacting and Helping Businesses like yours</h2>
            </div>
            <h6>The relationship and friendship we create with our stakeholders confers the responsibility of
“YOUR BUSINESS IS OUR BUSINESS”
makes us interested in whatever project our customers/stakeholders embarks on. Regular Loan is created to help meet the working capital needs of clients that run small businesses...Lots more. </h6>
            <div class="d-flex flex-wrap mt-50">
                <!-- Single Skills Area -->
                <div class="single-skils-area mb-70 mr-5">
                    <div id="circle" class="circle" data-value="0.90">
                        <div class="skills-text">
                            <span>98%</span>
                        </div>
                    </div>
                    <p>Professionalism</p>
                </div>

                <!-- Single Skills Area -->
                <div class="single-skils-area mb-70 mr-5">
                    <div id="circle2" class="circle" data-value="0.75">
                        <div class="skills-text">
                            <span>99%</span>
                        </div>
                    </div>
                    <p>Response</p>
                </div>

                <!-- Single Skills Area -->
                <div class="single-skils-area mb-70">
                    <div id="circle3" class="circle" data-value="0.97">
                        <div class="skills-text">
                            <span>100%</span>
                        </div>
                    </div>
                    <p>Confidentiality</p>
                </div>
            </div>
            <!--<a href="#" class="btn credit-btn box-shadow btn-2"></a>-->
        </div>
    </section>
    <!-- ##### Call To Action End ###### -->

    <!-- ##### Call To Action Start ###### -->
    <section class="cta-2-area wow fadeInUp" data-wow-delay="100ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="cta-text">
                            <h4>For Fast Loan With Less Stress...</h4>
                        </div>
                        <div class="cta-btn">
                            <a href="/register" class="btn credit-btn box-shadow">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <footer class="footer-area">
     
     

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            <a href="/" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>

                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Soft design<i class="fa fa-heart-o" aria-hidden="true"> </i> by <a href="https://colorlib.com" target="_blank">Inspired Solution</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>}
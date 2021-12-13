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
    <link rel="icon" href="/">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/w3.css">
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
            <div class="container h-50">
                <div class="row h-50 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="thumbnail">{{-- <h1>PerkPrime<h1/> --}}
                            <a href="/"><img class="rounded float-left" src="img/core-img/logo.png" width="150px" alt=""></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="D49 Extension, Efab Plaza Area 11, Garki Abuja"><img src="img/core-img/placeholder.png" alt=""> <span>C38 Extension, Efab Plaza Area 11, Garki Abuja</span></a>
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
                            <a href="#"><img src="img/core-img/call2.png" alt="">08154071580</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
<body>
    
        <main class="py-4">
            @yield('content')
        </main>
    </div>


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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Soft design<i class="fa fa-heart-o" aria-hidden="true"> </i> by <a href="#" target="_blank">Inspired Solutions</a>
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

</html>

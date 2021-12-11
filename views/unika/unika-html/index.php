<?php

// include_once(dirname(__FILE__)).'/./controllers/post-controller.php';

session_start();

if(isset($_SESSION["id"]) && isset($_SESSION["role"])){
    
    ?>

    // Source: Unika Template- https://www.free-css.com/free-css-templates/page270/unika
    <!doctype html>

    <html lang="en-US">
        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Home Page 2</title>

            <!-- Unika Responsive Website Template from Google -->
            <meta name="description" content="Unika - Responsive One Page HTML5 Template">
            <meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
            <meta name="author" content="imransdesign.com">

            <!-- Mobile Metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <!-- Google Fonts  -->
            <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
            <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

            <!-- Libs and Plugins CSS -->
            <link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="inc/animations/css/animate.min.css">
            <link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
            <link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
            <link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

            <!-- Theme CSS -->
            <link rel="stylesheet" href="css/reset.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/mobile.css">

            <!-- Skin CSS -->
            <link rel="stylesheet" href="css/skin/cool-gray.css">
            <!-- <link rel="stylesheet" href="css/skin/ice-blue.css"> -->
            <!-- <link rel="stylesheet" href="css/skin/summer-orange.css"> -->
            <!-- <link rel="stylesheet" href="css/skin/fresh-lime.css"> -->
            <!-- <link rel="stylesheet" href="css/skin/night-purple.css"> -->

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

        </head>

        <body data-spy="scroll" data-target="#main-navbar">
            <div class="page-loader"></div>  <!-- Display loading image while page loads -->
            <div class="body">
            
            <!-- Creating a header -->
                <header id="header" class="header-main">

                    <!-- Creating a navbar -->
                    <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                    <div class="container">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand page-scroll" href="index.html">ROOTS</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="page-scroll" href="body">Home</a></li>
                                <li><a class="page-scroll" href="#about-section">About</a></li>
                                <li><a class="page-scroll" href="#services-section">Reviews</a></li>
                                <li><a class="page-scroll" href="#portfolio-section">Works</a></li>
                                <li><a class="page-scroll" href="#team-section">Team</a></li>                            
                                <!-- <li><a class="page-scroll" href="#prices-section">Prices</a></li> -->
                                <li><a class="page-scroll" href="#contact-section">Contact</a></li>
                                <li><a class="page-scroll" href="../../../actions/logout.php">Logout</a></li>
                        
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                    </nav>
                    <!-- End Navbar -->

                </header>
                <!-- ========= END HEADER =========-->
                
                
                
                
                <!-- Begin text carousel intro section -->
                <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/pexels.jpg);">
                    
                    <div class="container">
                        <div class="caption text-center text-white" data-stellar-ratio="0.7">

                            <div id="owl-intro-text" class="owl-carousel">
                                <div class="item">
                                    <h1>Build your wealth with us</h1>
                                    <p>The easiest way to invest in mutual funds, money market, etc...</p>
                                    <!-- <div class="extra-space-l"></div>
                                    <a class="btn btn-blank" href="https://creativemarket.com/Themetorium" target="_blank" role="button">View More!</a> -->
                                </div>
                                <div class="item">
                                    <h1>Join with us</h1>
                                    <p>On the greatest journey to a great Future</p>
                                    <!-- <div class="extra-space-l"></div>
                                    <a class="btn btn-blank" href="https://creativemarket.com/Themetorium" target="_blank" role="button">View More!</a> -->
                                </div>
                                <div class="item">
                                    <h1>ROOTS Investment</h1>
                                    <p>For tracking Aids and Investments</p>
                                    <!-- <div class="extra-space-l"></div> -->
                                    <!-- <a class="btn btn-blank" href="https://creativemarket.com/Themetorium" target="_blank" role="button">View More!</a> -->
                                </div>
                            </div>

                        </div> <!-- /.caption -->
                    </div> <!-- /.container -->

                </section>
                <!-- End text carousel intro section -->
                    
                    
                    
                    
                <!-- Begin about section -->
                <section id="about-section" class="page bg-style1">
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                                <h2>About</h2>
                                <div class="devider"></div>
                                <p class="subtitle">little information</p>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->

                    <!-- Begin rotate box-1 -->
                    <div class="rotate-box-1-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                        <span class="rotate-box-icon"><i class="fa fa-users"></i></span>
                                        <div class="rotate-box-info">
                                            <h4>Who We Are?</h4>
                                            <p>We are an Investment Comapny that tracks foreign aids and investments.</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                                        <span class="rotate-box-icon"><i class="fa fa-diamond"></i></span>
                                        <div class="rotate-box-info">
                                            <h4>What We Do?</h4>
                                            <p>We track your investments made through our website and monitor the projects that the investments are used for.</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                                        <span class="rotate-box-icon"><i class="fa fa-heart"></i></span>
                                        <div class="rotate-box-info">
                                            <h4>Why We Do It?</h4>
                                            <p>we do it to create an easy way for you to invest in your comfort zone.</p>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="col-md-3 col-sm-6">
                                    <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.6s">
                                        <span class="rotate-box-icon"><i class="fa fa-clock-o"></i></span>
                                        <div class="rotate-box-info">
                                            <h4>Since When?</h4>
                                            <p>We have been working for over 10 years with which we come back bigger and better everytime.</p>
                                        </div>
                                    </a>
                                </div>
                                
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </div>
                    <!-- End rotate box-1 -->
                    
                    <div class="extra-space-l"></div>
                    
                    <!-- Begin page header--> 
                    <!-- <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                                <h4>Our Skills</h4>
                            </div>
                        </div>
                    </div> -->
                    <!-- End page header-->
                    
                    <!-- Begin Our Skills -->
                    <!-- <div class="our-skills">
                        <div class="container">
                            <div class="row">
                            
                                <div class="col-sm-6">
                                    <div class="skill-bar wow slideInLeft" data-wow-delay="0.2s">
                                        <div class="progress-lebel">
                                            <h6>Photoshop & Illustrator</h6>
                                        </div>
                                        <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="skill-bar wow slideInRight" data-wow-delay="0.2s">
                                        <div class="progress-lebel">
                                            <h6>WordPress</h6>
                                        </div>
                                        <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="skill-bar wow slideInLeft" data-wow-delay="0.4s">
                                        <div class="progress-lebel">
                                            <h6>Html & Css</h6>
                                        </div>
                                        <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="skill-bar wow slideInRight" data-wow-delay="0.4s">
                                        <div class="progress-lebel">
                                            <h6>Javascript</h6>
                                        </div>
                                        <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        </div>
                                        </div>
                                    </div>
                                </div> -->
                                
                            <!-- </div> /.row -->
                        <!-- </div> /.container -->
                    <!-- </div> -->
                    <!-- End Our Skill -->
            <!-- </section> -->
            <!-- End about section -->

                
                
                
            <!-- Begin cta -->
            <!-- <section id="cta-section">
                <div class="cta">
                    <div class="container">
                        <div class="row">
                        
                            <div class="col-md-9">
                                <h1>Download Our Pdf</h1>
                                <p>Inspired by nature, follow technology, appreciate the classics. You can build modern & professional websites with Unika. The possibilities are just endless.</p>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="cta-btn wow bounceInRight" data-wow-delay="0.4s">
                            <a class="btn btn-default btn-lg" href="http://www.imransdesign.com/" target="_blank" role="button">Download</a>
                                </div>
                            </div>
                            -->
        
                
                
                <!-- Begin Services
                <section id="services-section" class="page text-center">
                    Begin page header -->
                    <!-- <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Services</h2>
                                <div class="devider"></div>
                                <p class="subtitle">what we really know how</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- End page header-->
                
                    <!-- Begin roatet box-2 -->
                    <!-- <div class="rotate-box-2-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                        <span class="rotate-box-icon"><i class="fa fa-mobile"></i></span>
                                        <div class="rotate-box-info">
                                            <h4>App Development</h4>
                                            <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                        </div>
                                    </a>
                                </div>
                -->
                                <!-- <div class="col-md-3 col-sm-6">
                                    <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                        <span class="rotate-box-icon"><i class="fa fa-pie-chart"></i></span>
                                        <div class="rotate-box-info">
                                            <h4>Ui Design</h4>
                                            <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                        </div>
                                    </a>
                                </div>
                
                                <div class="col-md-3 col-sm-6">
                                    <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                        <span class="rotate-box-icon"><i class="fa fa-cloud"></i></span>
                                        <div class="rotate-box-info">
                                            <h4>Cloud Hosting</h4>
                                            <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="col-md-3 col-sm-6">
                                    <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                        <span class="rotate-box-icon"><i class="fa fa-pencil"></i></span>
                                        <div class="rotate-box-info">
                                            <h4>Coding Pen</h4>
                                            <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                                        </div>
                                    </a>
                                </div>
                                
                            </div> <!-- /.row -->
                        <!-- </div> /.container -->
                        
                        <!-- <div class="container">
                            <!-- Cta Button -->
                            <!-- <div class="extra-space-l"></div>
                            <div class="text-center">
                                <a class="btn btn-default btn-lg-xl" href="http://www.imransdesign.com/" target="_blank" role="button">Large Button</a>
                            </div> -->
                        <!-- </div> /.container                        -->
                    <!-- </div>
                    <!-- End rotate-box-2 -->
                <!-- </section> -->
                End Services -->
                --> -->
                
                
                
                <!-- Begin testimonials -->
                <section id="testimonial-section">
                    <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/testimonial-bg.jpg);">
                        <div class="cover"></div>
                        <!-- Begin page header-->
                        <div class="page-header-wrapper">
                            <div class="container">
                                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                    <h2>Reviews</h2>
                                    <div class="devider"></div>
                                    <p class="subtitle">What people say about us</p>
                                </div>
                            </div>
                        </div>
                        <!-- End page header-->
                        <div class="container">
                            <div class="testimonial-inner center-block text-center">
                                <div id="owl-testimonial" class="owl-carousel">
                                    <div class="item">
                                        <blockquote>
                                            <p>"This was my first experience with this investment company and they outperformed my expectation! They know their stuff and I highly recommend them! A+++".</p>
                                            <footer><cite title="Source Title">Daryl Hodgeman</cite></footer>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <blockquote>
                                            <p>"I just found out about this Investment website and i must say,
                                                they are one of the Number One best investors out of
                                                the gate."</p>
                                            <footer><cite title="Source Title">John Doe</cite></footer>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <blockquote>
                                            <p>"ROOTS Investments is the best! Its easy to get going on your investment journey.
                                                Always Facts. Privacy friendly. The Best Resources".</p>
                                            <footer><cite title="Source Title">Rebecca Molly</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End testimonials -->
                    

                    
                    
                <!-- Showing Investments Available -->
                <section id="portfolio-section" class="page bg-style1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio">
                                    <!-- Begin page header-->
                                    <div class="page-header-wrapper">
                                        <div class="container">
                                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                                <h2>Our Investments</h2>
                                                <div class="devider"></div>
                                                <p class="subtitle">What you can invest in</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End page header-->
                                    <div class="portfoloi_content_area" >
                                        <div class="portfolio_menu" id="filters">
                                            <ul>
                                                <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">All</a></li>
                                                <li><a href="#porfolio_menu" data-filter=".stocks">Stocks</a></li>
                                                <li><a href="#porfolio_menu" data-filter=".bonds">Bonds</a></li>
                                                <li><a href="#porfolio_menu" data-filter=".mutualfunds">Mutual Funds</a></li>
                                                <li><a href="#porfolio_menu" data-filter=".money-marketfunds">Money-market Funds</a></li>
                                                <li><a href="#porfolio_menu" data-filter=".annuities">Annuities</a></li>
                                                <li><a href="#porfolio_menu" data-filter=".exchange-tradedfunds">Exchange-traded Funds</a></li>
                                            </ul>
                                        </div>
                                        <div class="portfolio_content">
                                            <div class="row"  id="portfolio">
                                                <div class="col-xs-12 col-sm-4 stocks">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/stocks.jpg" alt="title"/>
                                                        <div>
                                                            <a href="#">Stocks</a>
                                                            <span>Subtitle</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 bonds">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/bonds.jpg" alt="title"/>
                                                        <div>
                                                            <a href="#">Bonds</a>
                                                            <span>Subtitle</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 mutualfunds">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/mutual.jpg" alt="title"/>
                                                        <div>
                                                            <a href="#">Mutual Funds</a>
                                                            <span>Subtitle</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 money-marketfunds">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/money-market.jpg" alt="title"/>
                                                        <div>
                                                            <a href="#">Money-market Funds</a>
                                                            <span>Subtitle</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 annuities">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/annuities.jpg" alt="title"/>
                                                        <div>
                                                            <a href="#">Annuities</a>
                                                            <span>Subtitle</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 exchange-tradedfunds">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/exhange-traded.jpg" alt="title"/>
                                                        <div>
                                                            <a href="#">Exchange-traded Funds</a>
                                                            <span>Subtitle</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-xs-12 col-sm-4 responsive">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/portfolio/p7.jpg" alt="title"/>
                                                        <div>
                                                            <a href="#">Last Motel</a>
                                                            <span>Subtitle</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 GraphicDesign">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/portfolio/p8.jpg" alt="title"/>
                                                        <div>
                                                            <a href="#">Dirk Road</a>
                                                            <span>Subtitle</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 websites">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/portfolio/p9.jpg" alt="title"/>
                                                        <div>
                                                            <a href="#">Old is Gold</a>
                                                            <span>Subtitle</span>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               
                
                 <!-- Investment Projects-->
                 <section id="portfolio-section" class="page bg-style1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio">
                                    <!-- Begin page header-->
                                    <div class="page-header-wrapper">
                                        <div class="container">
                                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                                <h2>Our Projects</h2>
                                                <div class="devider"></div>
                                                <p class="subtitle">Projects/Activities with Investments</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End page header-->
                                    <div class="portfoloi_content_area" >
                                        <!-- <div class="portfolio_menu" id="filters"> -->
                                            <!-- <ul> -->
                                                <!-- <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">All</a></li>
                                                <li><a href="#porfolio_menu" data-filter=".stocks">Stocks</a></li>
                                                <li><a href="#porfolio_menu" data-filter=".bonds">Bonds</a></li>
                                                <li><a href="#porfolio_menu" data-filter=".mutualfunds">Mutual Funds</a></li>
                                                <li><a href="#porfolio_menu" data-filter=".money-marketfunds">Money-market Funds</a></li>
                                                <li><a href="#porfolio_menu" data-filter=".annuities">Annuities</a></li> -->
                                                <!-- <li><a href="#porfolio_menu" data-filter=".exchange-tradedfunds">Exchange-traded Funds</a></li> -->
                                            <!-- </ul> -->
                                        <!-- </div> -->
                                        <div class="portfolio_content">
                                            <div class="row"  id="portfolio">
                                                <div class="col-xs-12 col-sm-4 stocks">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/pexel-1.jpg" alt="title"/>
                                                        <!-- <div>
                                                            <a href="#">Stocks</a>
                                                            <span>Subtitle</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 bonds">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/pexel-2.jpg" alt="title"/>
                                                        <!-- <div>
                                                            <a href="#">Bonds</a>
                                                            <span>Subtitle</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 mutualfunds">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/pexel-3.jpg" alt="title"/>
                                                        <!-- <div>
                                                            <a href="#">Mutual Funds</a>
                                                            <span>Subtitle</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 money-marketfunds">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/pexel-4.jpg" alt="title"/>
                                                        <!-- <div>
                                                            <a href="#">Money-market Funds</a>
                                                            <span>Subtitle</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 annuities">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/pexel-5.jpg" alt="title"/>
                                                        <!-- <div>
                                                            <a href="#">Annuities</a>
                                                            <span>Subtitle</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 exchange-tradedfunds">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/pexel-6.jpg" alt="title"/>
                                                        <!-- <div>
                                                            <a href="#">Exchange-traded Funds</a>
                                                            <span>Subtitle</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 responsive">
                                                    <div class="portfolio_single_content">
                                                        <img src="img/pexel-7.jpg" alt="title"/>
                                                        <!-- <div>
                                                            <a href="#">Last Motel</a>
                                                            <span>Subtitle</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End portfolio -->
                
                    
                    
                    
                <!-- Begin counter up -->
                <section id="counter-section">                					
                    <div id="counter-up-trigger" class="counter-up text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/counter-bg.jpg);">
                        <div class="cover"></div>
                        <!-- Begin page header-->
                        <div class="page-header-wrapper">
                            <div class="container">
                                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                    <h2>Some Fun Facts</h2>
                                    <div class="devider"></div>
                                    <p class="subtitle">Before anyone is not told</p>
                                </div>
                            </div>
                        </div>
                        <!-- End page header-->
                        <div class="container">

                            <div class="row">

                                <div class="fact text-center col-md-3 col-sm-6">
                                    <div class="fact-inner">
                                        <i class="fa fa-users fa-3x"></i>
                                        <div class="extra-space-l"></div>
                                        <span class="counter">8356</span>
                                        <p class="lead">Clients Worked With</p>
                                    </div>
                                </div>

                                <div class="fact text-center col-md-3 col-sm-6">
                                    <div class="fact-inner">
                                        <i class="fa fa-leaf fa-3x"></i>
                                        <div class="extra-space-l"></div>
                                        <span class="counter">800</span>
                                        <p class="lead">Completed Projects</p>
                                    </div>
                                </div>

                                <div class="fact text-center col-md-3 col-sm-6">
                                    <div class="fact-inner">
                                        <i class="fa fa-trophy fa-3x"></i>
                                        <div class="extra-space-l"></div>
                                        <span class="counter">60</span>
                                        <p class="lead">Winning Awards</p>
                                    </div>
                                </div>

                                <div class="fact last text-center col-md-3 col-sm-6">
                                    <div class="fact-inner">
                                        <i class="fa fa-money fa-3x"></i>
                                        <div class="extra-space-l"></div>
                                        <span class="counter">1100</span>
                                        <p class="lead">Investments Made</p>
                                    </div>
                                </div>

                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </div>
                </section>
                <!-- End counter up -->
                    
                    
                    
                    
                <!-- Begin team-->
                <section id="team-section" class="page">
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Our Team</h2>
                                <div class="devider"></div>
                                <p class="subtitle">Meat our experts</p>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
                    <div class="container">
                        <div class="row">
                            <div class="team-items">
                                <div class="col-md-2">
                                    <div class="team-container wow bounceIn" data-wow-delay="0.2s">
                                        <div class="team-item">
                                            <div class="team-triangle">
                                                <div class="content">
                                                    <img src="img/team/man5.jpg" alt="title"/>
                                                    <div class="team-hover text-center">
                                                        <i class="fa fa-male"></i>
                                                        <p>Krob Jobs</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="team-container wow bounceIn" data-wow-delay="0.3s">
                                        <div class="team-item">
                                            <div class="team-triangle">
                                                <div class="content">
                                                    <img src="img/team/woman1.jpg" alt="title"/>
                                                    <div class="team-hover text-center">
                                                        <i class="fa fa-female"></i>
                                                        <p>Jane Doe</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="team-container wow bounceIn" data-wow-delay="0.4s">
                                        <div class="team-item">
                                            <div class="team-triangle">
                                                <div class="content">
                                                    <img src="img/team/man2.jpg" alt="title"/>
                                                    <div class="team-hover text-center">
                                                        <i class="fa fa-male"></i>
                                                        <p>Albert Hugton</p>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-md-2">
                                    <div class="team-container wow bounceIn" data-wow-delay="0.5s">
                                        <div class="team-item">
                                            <div class="team-triangle">
                                                <div class="content">
                                                    <img src="img/team/woman2.png" alt="title"/>
                                                    <div class="team-hover text-center">
                                                        <i class="fa fa-female"></i>
                                                        <p>Miranda Jones</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="team-container wow bounceIn" data-wow-delay="0.6s">
                                        <div class="team-item">
                                            <div class="team-triangle">
                                                <div class="content">
                                                    <img src="img/team/woman3.jpg" alt="title"/>
                                                    <div class="team-hover text-center">
                                                        <i class="fa fa-female"></i>
                                                        <p>Michelle Bigs</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="team-container wow bounceIn" data-wow-delay="0.7s">
                                        <div class="team-item">
                                            <div class="team-triangle">
                                                <div class="content">
                                                    <img src="img/team/woman4.jpg" alt="title"/>
                                                    <div class="team-hover text-center">
                                                        <i class="fa fa-female"></i>
                                                        <p>Tiffany Blay</p>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="team-container wow bounceIn" data-wow-delay="0.8s">
                                        <div class="team-item">
                                            <div class="team-triangle">
                                                <div class="content">
                                                    <img src="img/team/man3.jpg" alt="title"/>
                                                    <div class="team-hover text-center">
                                                        <i class="fa fa-male"></i>
                                                        <p>Jeffery Doe</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>  
                        </div>
                    </div>

                </section>
                <!-- End team-->
                    
                    
                    
                    
                <!-- Begin partners
                <section id="partners-section">
                    <!-- Begin page header-->
                    <!-- <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Our Partners</h2>
                                <div class="devider"></div>
                                <p class="subtitle">Those who trust us</p>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
                    <!-- <div class="container">
                        <div id="owl-partners" class="owl-carousel">
                            <img src="img/partners/1.png" alt="img">
                            <img src="img/partners/2.png" alt="img">
                            <img src="img/partners/3.png" alt="img">
                            <img src="img/partners/4.png" alt="img">
                            <img src="img/partners/5.png" alt="img">
                            <img src="img/partners/6.png" alt="img">
                            <img src="img/partners/7.png" alt="img">
                        </div>
                    </div>
                </section> --> -->
                <!-- End partners -->
                    -->
                    
                    
                    
                <!-- Begin prices section -->
                <!-- <section id="prices-section" class="page"> -->

                    <!-- Begin page header-->
                    <!-- <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Prices</h2>
                                <div class="devider"></div>
                                <p class="subtitle">That how much</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- End page header-->

                    <!-- <div class="extra-space-l"></div> -->

                    <!-- Begin prices -->
                    <!-- <div class="prices">
                        <div class="container">
                            <div class="row">
                                
                                <div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.3s">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            <i class="fa fa-plug fa-2x"></i>
                                            <h3>Basic</h3>
                                        </div>
                                        <div class="panel-body text-center">
                                            <p class="lead"><strong>$49</strong></p>
                                        </div>
                                        <ul class="list-group text-center">
                                            <li class="list-group-item">Personal Use</li>
                                            <li class="list-group-item">3 projects</li>
                                            <li class="list-group-item">1 GB Disk</li>
                                            <li class="list-group-item">Custom Domain</li>
                                            <li class="list-group-item">24/7 Support</li>
                                        </ul>
                                        <div class="panel-footer text-center">
                                            <a class="btn btn-default" href="#">Order Now!</a>
                                        </div>
                                    </div>										
                                </div>

                                <div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.5s">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            <i class="fa fa-cog fa-2x"></i>
                                            <h3>Advanced</h3>
                                        </div>
                                        <div class="panel-body text-center">
                                            <p class="lead"><strong>$99</strong></p>
                                        </div>
                                        <ul class="list-group text-center">
                                            <li class="list-group-item">Personal Use</li>
                                            <li class="list-group-item">5 projects</li>
                                            <li class="list-group-item">5 GB Disk</li>
                                            <li class="list-group-item">Custom Domain</li>
                                            <li class="list-group-item">24/7 Support</li>
                                        </ul>
                                        <div class="panel-footer text-center">
                                            <a class="btn btn-default" href="#">Order Now!</a>
                                        </div>
                                    </div>										
                                </div> -->
                                
                                <!-- <div class="price-box col-sm-6 price-box-featured col-md-3 wow flipInY" data-wow-delay="0.7s">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            <i class="fa fa-star fa-2x"></i>
                                            <h3>Professional</h3>
                                        </div>
                                        <div class="panel-body text-center">
                                            <p class="lead"><strong>$149</strong></p>
                                        </div>
                                        <ul class="list-group text-center">
                                            <li class="list-group-item">Personal Use</li>
                                            <li class="list-group-item">20 Projects</li>
                                            <li class="list-group-item">20 GB Disk</li>
                                            <li class="list-group-item">Custom Domain</li>
                                            <li class="list-group-item">24/7 Support</li>
                                        </ul>
                                        <div class="panel-footer text-center">
                                            <a class="btn btn-default" href="#">Order Now!</a>
                                        </div>
                                        <div class="price-box-ribbon"><strong>Popular</strong></div>
                                    </div>										
                                </div> -->
                                
                                <!-- <div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.9s">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            <i class="fa fa-plus fa-2x"></i>
                                            <h3>Ultimate</h3>
                                        </div>
                                        <div class="panel-body text-center">
                                            <p class="lead"><strong>$199</strong></p>
                                        </div>
                                        <ul class="list-group text-center">
                                            <li class="list-group-item">Multi Use</li>
                                            <li class="list-group-item">Unlimited Projects</li>
                                            <li class="list-group-item">99 GB Disk</li>
                                            <li class="list-group-item">Custom Domain</li>
                                            <li class="list-group-item">24/7 Support</li>
                                        </ul>
                                        <div class="panel-footer text-center">
                                            <a class="btn btn-default" href="#">Order Now!</a>
                                        </div>
                                    </div>										
                                </div> -->
                                
                            <!-- </div> <!-- /.row -->
                        <!-- </div> /.container -->
                    <!-- </div> --> -->
                    <!-- End prices -->
                    <!-- <div class="extra-space-l"></div>
                </section>
                End prices section -->
                    
                    
                    
                    
                <!-- Begin social section -->
                <!-- <section id="social-section"> -->
                
                    <!-- Begin page header-->
                    <!-- <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Join Us</h2>
                                <div class="devider"></div>
                                <p class="subtitle">Follow us on social networks</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- End page header-->
                    
                    <!-- <div class="container">
                        <ul class="social-list">
                            <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.3s"><span class="rotate-box-icon"><i class="fa fa-facebook"></i></span></a></li>
                            <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span class="rotate-box-icon"><i class="fa fa-twitter"></i></span></a></li>
                            <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.5s"><span class="rotate-box-icon"><i class="fa fa-google-plus"></i></span></a></li>
                            <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.6s"><span class="rotate-box-icon"><i class="fa fa-pinterest-p"></i></span></a></li>
                            <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.7s"><span class="rotate-box-icon"><i class="fa fa-tumblr"></i></span></a></li>
                            <li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.8s"><span class="rotate-box-icon"><i class="fa fa-dribbble"></i></span></a></li>                      
                        </ul>
                    </div>
                    
                </section> -->
                <!-- End social section -->
                    
                    
                    
                    
                <!-- Begin contact section -->
                <section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/map-bg.jpg);">
                <div class="cover"></div>
                
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>Investments Forms</h2>
                                <div class="devider"></div>
                                <p class="subtitle">Fill this form to invest with us</p>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
                    
                    <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                        <div class="container">
                            <div class="row">
                            
                                <div class="col-sm-6">
                                    <div class="contact-info">
                                        <h4>Our Address</h4>
                                        <ul class="contact-address">
                                            <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; Maseru Avanue (East Legon) 5th Floor ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ROOTS Investments in Accra ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACCRA, GHANA 33148</li>
                                            <li><i class="fa fa-phone"></i>&nbsp; 020-7856-220</li>
                                            <li><i class="fa fa-print"></i>&nbsp; 0322-090-287</li>
                                            <li><i class="fa fa-envelope"></i> info@rootsinvestments.com</li>
                                            <li><i class="fa fa-skype"></i> ROOTS Investment Company</li>
                                        </ul>
                                    </div>
                                </div>
                            
                                <div class="col-sm-6">
                                    <div class="contact-form">
                                        <h4>Form</h4>
                                        <form role="form" action="../../../actions/investmentform.php" method="post">
                                            <div class="form-group" >
                                                <input type="text" class="form-control input-lg" name="name" id="name" placeholder="Name/Company name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control input-lg" name="investor" id="investor" placeholder="Type of Investor">
                                                <select name="Select" id="select">
                                                    <option value="Regular Investor">Regular Investor</option>
                                                    <option value="Company Investor">Company Investor</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control input-lg" name="location" id="location" placeholder="Location" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control input-lg" name="type" id="type" placeholder="Type of Investment" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control input-lg" name="project" id="project" placeholder="Name of Project" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control input-lg" name="description" id="description" rows="5" placeholder="Project description(state funds)" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <p>Project Start Date</p>
                                                <input type="date" class="form-control input-lg" name="start" id="start" placeholder="Project start date" required>
                                            </div>
                                            <div class="form-group">
                                                <p>Project End Date</p>
                                                <input type="date" class="form-control input-lg" name="end" id="end" placeholder="Project-end-date" required>
                                            </div>
                                            <button type="submit" name="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">Send</button>
                                        </form>
                                    </div>	
                                </div>
                                                                                    
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </div>
                </section>
                <!-- End contact section -->
                    
                    

                    
                <!-- Begin footer -->
                <footer class="text-off-white">
                
                    <div class="footer-top">
                        <div class="container">
                            <div class="row wow bounceInLeft" data-wow-delay="0.4s">

                                <div class="col-sm-6 col-md-4">
                                    <h4>Useful Links</h4>
                                    <ul class="imp-links">
                                        <li><a href="">About</a></li>
                                        <li><a href="">Services</a></li>
                                        <li><a href="">Press</a></li>
                                        <li><a href="">Copyright</a></li>
                                        <li><a href="">Advertise</a></li>
                                        <li><a href="">Legal</a></li>
                                    </ul>
                                </div>
                            
                                <div class="col-sm-6 col-md-4">
                                    <h4>Subscribe</h4>
                                    <div id="footer_signup">
                                        <div id="email">
                                            <form id="subscribe" method="POST">
                                                <input type="text" placeholder="Enter email address" name="email" id="address" data-validate="validate(required, email)"/>
                                                <button type="submit">Submit</button>
                                                <span id="result" class="section-description"></span>
                                            </form> 
                                        </div>
                                    </div> 
                                    <p>Subscribe by entering a valid email address.</p> 
                                </div>

                                <div class="col-sm-12 col-md-4">
                                    <h4>Recent Tweets</h4>
                                    <div class="single-tweet">
                                        <div class="tweet-content"><span>@ROOTS_Investment</span>This investment company is amazing.</div>
                                        <div class="tweet-date">1 Hour ago</div>
                                    </div>
                                    <div class="single-tweet">
                                        <div class="tweet-content"><span>@ROOTS_Investment</span> It's their wonderful resources for me.</div>
                                        <div class="tweet-date">1 Hour ago</div>
                                    </div>
                                </div>
                                
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </div>
                    
                    <!-- <div class="footer">
                        <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                            <p class="copyright">Copyright &copy; 2015 - Designed By <a href="https://www.behance.net/poljakova" class="theme-author">Veronika Poljakova</a> &amp; Developed by <a href="http://www.imransdesign.com/" class="theme-author">Imransdesign</a></p>
                        </div>
                    </div> -->

                </footer>
                <!-- End footer -->

                <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                                
            </div><!-- body ends -->
            
            
            
            
            <!-- Plugins JS -->
            <script src="inc/jquery/jquery-1.11.1.min.js"></script>
            <script src="inc/bootstrap/js/bootstrap.min.js"></script>
            <script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
            <script src="inc/stellar/js/jquery.stellar.min.js"></script>
            <script src="inc/animations/js/wow.min.js"></script>
            <script src="inc/waypoints.min.js"></script>
            <script src="inc/isotope.pkgd.min.js"></script>
            <script src="inc/classie.js"></script>
            <script src="inc/jquery.easing.min.js"></script>
            <script src="inc/jquery.counterup.min.js"></script>
            <script src="inc/smoothscroll.js"></script>

            <!-- Theme JS -->
            <script src="js/theme.js"></script>

        </body> 
            
                
    </html>
    <?php
}
else{
    echo "
        <script type=text/javascript>
            alert('You are not logged in');
            document.location.href='/final_project/login:signup.html';
        </script>
        ";
}

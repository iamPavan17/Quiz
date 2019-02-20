<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "quiz";
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Wordsmith</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="homepage/css/base.css">
    <link rel="stylesheet" href="homepage/css/vendor.css">
    <link rel="stylesheet" href="homepage/css/main.css">

    <!-- script
    ================================================== -->
    <script src="homepage/js/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header header">

        <div class="header__logo">
            <a class="logo" style="font-size: 32px;"><strong>Quizme.</strong>
                <!-- <img src="homepage/images/icon-location.png" alt="Homepage"> -->
            </a>
        </div> <!-- end header__logo -->

        <!-- <a class="header__search-trigger" href="#0"></a> -->
        <!-- <div class="header__search">

            <form role="search" method="get" class="header__search-form" action="#">
                <label>
                    <span class="hide-content">Search for:</span>
                    <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>

            <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

        </div> -->  <!-- end header__search -->

        <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6">Navigate to</h2>

            <ul class="header__nav">
                <li class="current"><a href="#" title="">Home</a></li>
                <li class="has-children">
                    <a href="#0" title="">Account</a>
                    <ul class="sub-menu">
                        <li><a href="admin_login.php">Admin</a></li>
                        <li><a href="organisers_login.php">Organisers</a></li>
                        <li><a href="login.php">Student</a></li>
                    </ul>
                </li>
                <li><a href="#toppers" title="">LeaderBoard</a></li>
                <li><a href="#about" title="">About</a></li>
            </ul> <!-- end header__nav -->

            <!-- <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a> -->

        </nav> <!-- end header__nav-wrap -->

    </header> <!-- s-header -->


    <!-- featured 
    ================================================== -->
    <section class="s-featured">
        <div class="row">
            <div class="col-full">

                <div class="featured-slider featured" data-aos="zoom-in">

                    <div class="featured__slide">
                        <div class="entry">

                            <div class="entry__background" style="background-image:url('homepage/images/thumbs/featured/i.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Success</a></span>

                                <h1><a href="#0" title="">To win big, you sometimes have to take big risks.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="homepage/images/avatars/bill.jpg" alt="">
                                    </a>
                                    <ul class="entry__meta">
                                        <li><a href="#0">Bill Gates</a></li>
                                        <li>Microsoft Founder.</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('homepage/images/thumbs/featured/featured-watch.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Management</a></span>

                                <h1><a href="#0" title="">Better three hours too soon, than one minute too late.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="homepage/images/avatars/ShakespeareWilliam.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">William Shakespeare</a></li>
                                        <li>English poet</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('homepage/images/thumbs/featured/time.jpg');"></div>

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">LifeStyle</a></span>

                                <h1><a href="#0" title="">Life is about improving and getting better.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="homepage/images/avatars/cm.jpg" alt="" >
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">Conor McGregor</a></li>
                                        <li>UFC Fighter</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->
                    
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div>
    </section> <!-- end s-featured -->


    <!-- s-content
    ================================================== -->
    <section class="s-content" id="toppers">
        
        <div class="row entries-wrap wide">
            <div class="entries">


                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a class="item-entry__thumb-link">
                                <img src="homepage/images/thumbs/post/clap.jpg" 
                                     srcset="homepage/images/thumbs/post/clap.jpg 1x, homepage/images/thumbs/post/clap.jpg 2x" alt="" style="height: 300px;">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <!-- <a href="category.html">Health</a> -->
                            </div>
                            <br><br>
                            <h1 class="item-entry__title"><a>Our last week's <br>Top 3 scorers.</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">Quizme.</a>
                            </div>
                        </div>
                    </div> 
    
                </article> 

                <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a class="item-entry__thumb-link">
                                <img src="homepage/images/thumbs/post/1.png" 
                                     srcset="homepage/images/thumbs/post/1.png 1x, homepage/images/thumbs/post/1.png 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat"><br>
                                <a href="category.html">XXXXXX</a>
                            </div>
                            <br>
                            <h1 class="item-entry__title"><a>XXXXXXXXXX</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">Quizme.</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a class="item-entry__thumb-link">
                                <img src="homepage/images/thumbs/post/2.png" 
                                     srcset="homepage/images/thumbs/post/2.png 1x, homepage/images/thumbs/post/2.png 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">XXXXXXXXX</a>
                            </div>
    <br>
                            <h1 class="item-entry__title"><a>XXXXXXXXX</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">Quizme.</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->

                </article> <!-- end article -->

                <article class="col-block">
                
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a class="item-entry__thumb-link">
                                <img src="homepage/images/thumbs/post/3.png" 
                                     srcset="homepage/images/thumbs/post/3.png 1x, homepage/images/thumbs/post/3.png 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">
                            <div class="item-entry__cat">
                                <a href="category.html">XXXXXXXXXXXXX</a>
                            </div>
                            <br>
                            <h1 class="item-entry__title"><a>XXXXXXXXXXX</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="single-standard.html">Quizme.</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->
    
                </article> <!-- end article -->
                
            </div> <!-- end entries -->
        </div> <!-- end entries-wrap -->

    </section> <!-- end s-content -->




    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main" id="about">
            <div class="row">
                
                <div class="col-six tab-full s-footer__about">
                        
                    <h4>About Quizme.</h4>

                    <p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
            XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
        XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx
    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXxxx</p>

                </div> <!-- end s-footer__about -->

                <div class="col-six tab-full s-footer__subscribe">
                        
                    <h4>Team Memebers</h4>

                    <p>XXXXXXXXXXXXXXXXX</p>
                    <p>XXXXXXXXXXXXXXXXX</p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                
                            <input type="submit" name="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">

                <div class="col-six">
                    <ul class="footer-social">
                        <li>
                            <a href="#0"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-twitter"></i></a>
                        </li>
                        <!-- <li>
                            <a href="#0"><i class="fab fa-instagram"></i></a>
                        </li> -->
                        <li>
                            <a href="#0"><i class="fab fa-linkedin"></i></a>
                        </li>
                       <!--  <li>
                            <a href="#0"><i class="fab fa-pinterest"></i></a>
                        </li> -->
                    </ul>
                </div>

                <div class="col-six">
                    <div class="s-footer__copyright">
                        <span>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">DSY</a>
</span>
                    </div>
                </div>
                
            </div>
        </div> <!-- end s-footer__bottom -->

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>

    </footer> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="homepage/js/jquery-3.2.1.min.js"></script>
    <script src="homepage/js/plugins.js"></script>
    <script src="homepage/js/main.js"></script>

</body>

</html>
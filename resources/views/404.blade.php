<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Viras Security || Responsive HTML 5 template</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{URL::Asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::Asset('css/responsive.css')}}">
</head>
<body>

{{-- <div class="preloader"></div><!-- /.preloader --> --}}

<header class="header header-fixed header-2 stricky">
    <nav class="navbar navbar-default header-navigation ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-bar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index-2.html">
                    <img src="img/logo-2.png" alt="Awesome Image"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="main-nav-bar">               
                <ul class="nav navbar-nav navigation-box main-navigation mainmenu">
                    <li>
                        <a href="index-2.html">Home</a>
                        <ul class="sub-menu ">                           
                            <li><a href="index-2.html">Home Page One</a></li>
                            <li><a href="index-3.html">Home Page Two</a></li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li>
                        <a href="about.html">About</a>                    
                    </li>
                    <li>
                        <a href="services.html">Service</a>                    
                        <ul class="sub-menu ">                           
                            <li><a href="lock.html">Locksmith Services</a></li>
                            <li><a href="fingerprint.html">Finger Print Access</a></li>
                            <li><a href="video.html">Video Surveillance</a></li>
                            <li><a href="saftes.html">Safes & Locks</a></li>
                            <li><a href="doors.html">Security Doors</a></li>
                            <li><a href="bank.html">Bank Locker Access</a></li>
                            <li><a href="number.html">Number Locker</a></li>
                            <li><a href="system.html">System password</a></li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li class="current">
                        <a href="#">Pages</a>                    
                        <ul class="sub-menu ">                           
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="single-gallery.html">Gallery Details</a></li>
                            <li><a href="404.html">Error Page</a></li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li>
                        <a href="blog-grid.html">Blog</a>
                        <ul class="sub-menu ">                           
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul><!-- /.sub-menu -->                    
                    </li>
                    <li>
                        <a href="contact-1.html">Contact</a>    
                        <ul class="sub-menu ">                           
                            <li><a href="contact-1.html">Contact One</a></li>
                            <li><a href="contact-2.html">Contact Two</a></li>
                        </ul><!-- /.sub-menu -->                
                    </li>
                </ul>               
            </div><!-- /.navbar-collapse -->

            <div class="right-button-box">
                <a href="#"  data-toggle="modal" data-target=".search-form-modal" class="search-btn"><i class="icon icon-Search"></i></a>
            </div><!-- /.right-button-box -->
        </div><!-- /.container -->
    </nav>  
</header>

<section class="error-404 text-center">
    <div class="container">
        <h1>404</h1>
        <h2>Page Not Found</h2>
        <p>The page you were looking for could not be found.</p>
        <form action="#" class="error-404-form">
            <input type="text" placeholder="Enter Your Keyword....." />
            <button type="submit">Search</button>
        </form><!-- /.error-404-form -->
        <a href="#" class="go-home"><i class="fa fa-arrow-circle-left"></i> <span>Go to Home</span></a>
    </div><!-- /.container -->
</section><!-- /.error-404 -->

<section class="social-branding">
    <div class="container">
        <ul class="social list-inline">
            <li><a href="#" class="fa fa-facebook"></a></li><!--
            --><li><a href="#" class="fa fa-twitter"></a></li><!--
            --><li><a href="#" class="fa fa-google-plus"></a></li><!--
            --><li><a href="#" class="fa fa-pinterest"></a></li><!--
            --><li><a href="#" class="fa fa-skype"></a></li>
        </ul><!-- /.social list-inline -->
    </div><!-- /.container -->
</section><!-- /.social-branding -->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <a href="index-2.html" class="footer-logo"><img src="img/logo.png" alt="Awesome Image"/></a>
                    <p>301 The Greenhouse, Custard <br />Factory, London, E28DY.</p>
                    <p>Email: security@viras.com</p>
                    <p>Phone: +44 (0) 123 456 7890</p>
                </div><!-- /.footer-widget about-widget -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-2 col-sm-6">
                <div class="footer-widget links-widget">
                    <div class="title">
                        <div class="line"></div><!-- /.line -->
                        <h3>Browse</h3>
                    </div><!-- /.title -->
                    <ul class="links-list">
                        <li><i class="fa fa-angle-right"></i> Contact Us</li>
                        <li><i class="fa fa-angle-right"></i> Testimonial</li>
                        <li><i class="fa fa-angle-right"></i> Our Work</li>
                        <li><i class="fa fa-angle-right"></i> Services</li>
                        <li><i class="fa fa-angle-right"></i> About Us</li>
                    </ul><!-- /.links-list -->
                </div><!-- /.footer-widget links-widget -->
            </div><!-- /.col-md-2 -->
            <div class="col-md-4 col-sm-6">
                <div class="footer-widget twitter-widget">
                    <div class="title">
                        <div class="line"></div><!-- /.line -->
                        <h3>Laset Tweets</h3>
                    </div><!-- /.title -->
                    <div class="single-twitter">
                        <p>WordPress 4.9.4 Maintenance Release https://t.co/lOelolfR9O <span>http://fontawesome. io/cheats</span></p>
                    </div><!-- /.single-twitter -->
                    <div class="single-twitter">
                        <p>WordPress 4.9.4 Maintenance Release https://t.co/lOelolfR9O <span>http://fontawesome. io/cheats</span></p>
                    </div><!-- /.single-twitter -->
                </div><!-- /.footer-widget twitter-widget -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget contact-widget">
                    <div class="title">
                        <div class="line"></div><!-- /.line -->
                        <h3>Contact Us</h3>
                    </div><!-- /.title -->
                    <form action="#" class="footer-contact-form">
                        <input type="text" placeholder="Name*" />
                        <input type="text" placeholder="Email*" />
                        <button type="submit" class="thm-btn">Send</button>
                    </form><!-- /.contact-form -->
                </div><!-- /.footer-widget links-widget -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer>

<div class="footer-bottom text-center">
    <div class="container">
        <p>&copy;  Copyrights 2018. Viras All Rights Reserved</p>
    </div><!-- /.container -->
</div><!-- /.footer-bottom -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

<!-- Modal -->
<div class="modal fade search-form-modal" id="search-form-modal" tabindex="-1" role="dialog" aria-labelledby="search-form-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="#" class="popup-search-form">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <input type="text" placeholder="Enter Your Text Here...." />
                    <button type="submit" class="fa fa-search"></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->

<script src="assets/jquery.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from html.tonatheme.com/2018/viras/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 11:09:01 GMT -->
</html>
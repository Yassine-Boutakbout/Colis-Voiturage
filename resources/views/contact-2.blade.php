<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Viras Security || Responsive HTML 5 template</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
</head>
<body>

<div class="preloader"></div><!-- /.preloader -->

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
                    <img src="{{ URL::asset('img/logo-1.png') }}" alt="Awesome Image"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="main-nav-bar">               
                <ul class="nav navbar-nav navigation-box main-navigation mainmenu">
                    <li >
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
                    <li>
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
                    <li class="current">
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

<section class="inner-banner" style="background-image: url(img/inner-banner-1-8.jpg);">
    <div class="container">
        <div class="title pull-left">
            <h2>Contact Page Two</h2>
        </div><!-- /.title pull-left -->
        <div class="breadcumb pull-right">
            <a href="#">Home</a><!--
            --><span class="sep">/</span><!--
            --><span class="page-name">Contact Page Two</span>
        </div><!-- /.breadcumb pull-right -->
    </div><!-- /.contianer -->
</section><!-- /.inner-banner -->



<section class="contact-form-style-two gray-bg sec-pad">
    <div class="container">
        <div class="col-md-12" id="continermsg">
            <div class="col-md-2" class="cat">
                <ul type="none">
                    <br>
                    <li id="res" style="border: 1px #fff dashed;">Boite Reception</li>
                </ul>
            </div>
            <div class="col-md-4" id="msg" style="display: none; margin-top: 20px;">
                <ul type="none" id="data">
                    @foreach($message as $m)
                        <li id="{{$m->id}}"><a style="color: #0e0e0e;">{{$m->objet}} de {{ $client[$m->id_env-2]->nom }} {{ $client[$m->id_env-2]->prenom }}</a></li><br>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6" id="ici" style="display: none; margin-top: 20px;">
                lecture message
                <ul type="none">
                    @foreach($message as $m)
                        <li> </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="sec-title text-center">
            <div class="line"></div><!-- /.line -->
            <h2>Ready To Request a <span>Quote?</span></h2>
            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional <br /> clickthroughs from DevOps.Nanotechnology immersion along the information</p>
        </div><!-- /.sec-title -->
        <div class="contact-form-style-two-content">
            @if (isset($errors) && $errors->any())
                <div class="row">
                    <div class="col-xs-12">
                        <div class="alert alert-danger alert-alt">
                            <strong><i class="fa fa-bug fa-fw"></i> Exception</strong><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <br/>
            @endif
            <form method="POST" class="row">
                {{csrf_field()}}
                <div class="col-md-6">
                    <div class="form-box">
                        <div class="form-group {{ $errors->has('dest') ? 'has-error' :'' }}">
                            <i class="fa fa-user"></i>
                                <input name="dest" list="browsers" placeholder="Destinataire*" />
                                <datalist id="browsers">
                                    @if (isset($client))
                                        @foreach($client as $c)
                                            <option value="{{ $c->email }}"/>
                                        @endforeach
                                    @endif
                            </datalist>
                        </div>
                    </div><!-- /.form-box -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="form-box">
                        <div class="form-group {{ $errors->has('objet') ? 'has-error' :'' }}">
                            <i class="fa fa-envelope"></i>
                            <input type="text" name="objet" placeholder="Objet*" />
                        </div>
                    </div><!-- /.form-box -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-12">
                    <div class="form-box">
                        <div class="form-group {{ $errors->has('message') ? 'has-error' :'' }}">
                            <i class="fa fa-pencil-square"></i>
                            <textarea name="message" placeholder="Votre Message"></textarea>
                        </div>
                    </div><!-- /.form-box -->
                    <button class="thm-btn" type="submit">Submit</button>
                </div><!-- /.col-md-12 -->
            </form>
        </div><!-- /.contact-form-style-one-content -->
    </div><!-- /.container -->
</section><!-- /.contact-form-style-two -->

{{$errors}}

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

<script src="{{ URL::asset('assets/jquery.js') }}"></script>
<script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/bootstrap-select/dist/js/bootstrap-select.min.js') }}" ></script>
<script src="{{ URL::asset('assets/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('assets/owl.carousel-2/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('assets/isotope.js') }}"></script>
<script src="{{ URL::asset('assets/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ URL::asset('assets/waypoints.min.js') }}"></script>
<script src="{{ URL::asset('assets/jquery.counterup.min.js') }}"></script>
<script src="{{ URL::asset('assets/wow.min.js') }}"></script>
<script src="{{URL::asset('assets/vegas/vegas.min.js') }}"></script>
<script src="{{ URL::asset('js/custom.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>

<script>
   
    jQuery(document).ready(function($){

    $('.live-search-list li').each(function(){
    $(this).attr('data-search-term', $(this).text().toLowerCase());
    });

    $('.live-search-box').on('keyup', function(){

    var searchTerm = $(this).val().toLowerCase();

        $('.live-search-list li').each(function(){

            if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
                $(this).show();
            } else {
                $(this).hide();
            }

        });

    });

    });
</script>

<script>

    $('#res').on('click',function () {
        $('#msg').animate({opacity: 'toggle'})
    });



    $("#data li").click(function() {

        // alert(this.id); // id of clicked li by directly accessing DOMElement property
        $.get('{{URL::to('msg/')}}'+'/'+this.id,function (data) {
        $('#ici').html(data).animate({height: 'toggle'});
        // alert($(this).attr('id')); // jQuery's .attr() method, same but more verbose
        // alert($(this).html()); // gets innerHTML of clicked li
        // alert($(this).text()); // gets text contents of clicked li
    });

    // $('ul[id="data"]').on('click',function () {

    //     var ob =($('option[id="ob"]').attr('value'));
    //     $.get('{{URL::to('msg/')}}'+'/'+ob,function (data) {
    //     $('#ici').html(data).animate({height: 'toggle'});
    //     console.log(test);
    //     });
    })

    
</script>

<script type="text/javascript">
    $('#data li').click(function () {
    // remove existing active class inside li elements
    $('li.activemsg').removeClass('activemsg');
    // add class to current clicked element
    $(this).closest('li').addClass('activemsg');
});

</script>


</body>
</html>
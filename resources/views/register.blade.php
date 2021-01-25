<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Colis-Voiturage</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
</head>
<body>

<div class="preloader"></div><!-- /.preloader -->

<header class="header header-fixed header-1 stricky">
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
                    <img src="{{ URL::asset('/img/logo-1.png') }}" alt="Awesome Image"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="main-nav-bar">               
                <ul class="nav navbar-nav navigation-box main-navigation mainmenu">
                    <li  class="current">
                       <a href="{{ url('/auth')}}" s>Connection</a>                
                    </li>
                </ul>               
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>  
</header>


<section class="inner-banner" style="background-image: url(img/deva-darshan-456874-unsplash.jpg);">
    <div class="container">
        <div class="title pull-left">
            <h2>Bienvenu Entre Nous ! </h2>
        </div><!-- /.title pull-left -->
        
    </div><!-- /.contianer -->
</section><!-- /.inner-banner -->

<!-- /.contact-info-style-one -->

<section class="contact-form-style-one">
    <div class="container">
        <!-- /.col-md-6 -->
        <div class="col-md-7">
            <div class="contact-form-style-one-content">
                <div class="sec-title">
                    <div class="line"></div><!-- /.line -->
                    <h2>Sing <span>up</span></h2>
                    
                <p></p></div><!-- /.sec-title -->

@if (isset($errors) && $errors->any())
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-danger alert-alt">
                <strong><i class="fa fa-bug fa-fw"></i> Ошибка</strong><br>
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

            <form class="colon" method="POST" enctype="multipart/form-data" >
                  {{ csrf_field() }}
                <div id="tabs">
                    <div class="col-md-12 ">
                        <div class="form-box">
                            <!--Checkbox butons-->
                            <div id="navnav">
                                <div class="btn-group" data-toggle="buttons">

                                    <label class="btn btn-default active form-check-label">
                                        <input name="radio" type="radio" value="expediteur" checked onchange="hidemeC()"> Expéditeur
                                    </label>

                                    <label class="btn btn-default form-check-label">
                                        <input name="radio" type="radio" value="conducteur" onchange="hidemeE()"> Conducteur
                                    </label>
                                </div>
                            </div><!--/. navnav-->
                            <!--Checkbox butons-->
                        </div>
                    </div>


            
                <div id="div1"  class="tab">
                    <div class="col-md-12 ">
                        <div class="form-box">
                            <i class="fa fa-user"></i>
                            <input placeholder="Nom* Expéditeur"  value="{{Request::old('nom')}}"  name="nomE" type="text"  autofocus>
                            
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->
                 
                    <div class="col-md-12 ">
                        <div class="form-box">
                            <i class="fa fa-user"></i>
                            <input placeholder="Prénom*" value="{{Request::old('prenom')}}"  name="prenomE" type="text" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                 
                    <div class="col-md-12">
                        <div class="form-box">
                            <i class="fa fa-envelope"></i>
                            <input placeholder="Email*" value="{{Request::old('email')}}"  name="emailE" type="text" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->
                    
                    <div class="col-md-12">
                        <div class="form-box">
                            <i class="glyphicon glyphicon-earphone"></i>
                            <input placeholder="Tele*" value="{{Request::old('telephone')}}"  name="telephoneE" type="text" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                  
                    <div class="col-md-12">
                        <div class="form-box">
                            <i class="glyphicon glyphicon-credit-card"></i>
                            <input placeholder="Numéro de compte banqaire*" value="{{Request::old('cartebancaire')}}"  name="cartebancaireE" type="text" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-12">
                        <div class="form-box">
                            <i class="glyphicon glyphicon-link"></i>
                            <input placeholder="Password*" name="passE" type="text" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-12">
                        <div class="form-box">
                            <i class="glyphicon glyphicon-link"></i>
                            <input placeholder="Confirmm Password *" name="confirmpassE" type="text" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.div1 -->


                <div id="div2" class="tab">
                    <div class="col-md-12 ">
                        <div class="form-box">
                            <i class="fa fa-user"></i>
                            <input placeholder="Nom* Conducteur"  value="{{Request::old('nom')}}"  name="nomC" type="text"  autofocus>
                            
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->
                 
                    <div class="col-md-12 ">
                        <div class="form-box">
                            <i class="fa fa-user"></i>
                            <input placeholder="Prénom*" value="{{Request::old('prenom')}}"  name="prenomC" type="text" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                 
                    <div class="col-md-12">
                        <div class="form-box">
                            <i class="fa fa-envelope"></i>
                            <input placeholder="Email*" value="{{Request::old('email')}}"  name="emailC" type="text" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->
                    
                    <div class="col-md-12">
                        <div class="form-box">
                            <i class="glyphicon glyphicon-earphone"></i>
                            <input placeholder="Tele*" value="{{Request::old('telephone')}}"  name="telephoneC" type="text" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                  
                    <div class="col-md-12">
                        <div class="form-box">
                            <i class="glyphicon glyphicon-credit-card"></i>
                            <input placeholder="Numéro de compte banqaire*" value="{{Request::old('cartebancaire')}}"  name="cartebancaireC" type="text" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-12">
                        <div class="form-box">
                            <i class="glyphicon glyphicon-link"></i>
                            <input placeholder="Password*" name="passC" type="password" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-12">
                        <div class="form-box">
                            <i class="glyphicon glyphicon-link"></i>
                            <input placeholder="Confirmm Password *" name="confirmpassC" type="password" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->
                    
                    <div class="col-md-8">
                        <div class="form-box">
                            Type Vehicule:<br><br>

                            <label class="container1"><img src="{{ URL::asset('img/car_ico.png') }}" alt="Awesome Image"/>
                              <input type="radio" checked="checked" name="type_vehicule" value="1">
                              <span class="checkmark"></span>
                            </label>
                            <label class="container1"><img src="{{ URL::asset('img/sumo_ico.png') }}" alt="Awesome Image"/>
                              <input type="radio" name="type_vehicule" value="2">
                              <span class="checkmark"></span>
                            </label>
                            <label class="container1"><img src="{{ URL::asset('img/truck_ico.png') }}" alt="Awesome Image"/>
                              <input type="radio" name="type_vehicule" value="3">
                              <span class="checkmark"></span>
                            </label>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                    
                    <div class="col-md-12">
                        <div class="form-box">
                            <i class="glyphicon glyphicon-link"></i>
                            <input placeholder="matricule" name="matricule" type="text" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-12">
                        <div class="form-box">
                           Photo du Vehicule:<br><br>
                            <input class="form-control"  type="file" name="image"  >
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.div2 -->

            </div><!-- id="tabs" -->

                    <div class="col-md-12">
                        <div class="form-box">
                            <button class="thm-btn" type="submit">Submit</button>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                </form>
            </div><!-- /.contact-form-style-one-content -->
        </div><!-- /.col-md-6 -->
    </div><!-- /.container -->
</section><!-- /.contact-form-style-one -->



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
<script type="text/javascript">

    function hidemeE(){
        document.getElementById('div1').className="tab hide";
        document.getElementById('div2').className="tab";
    }

    function hidemeC(){
        document.getElementById('div1').className="tab";
        document.getElementById('div2').className="tab hide";
    }

    hidemeC();
</script>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <a href="index.html" class="footer-logo"><img src="{{URL::to('/')}}/public/img/logo-1.png" alt="Awesome Image"/></a>
                    <p>Avenue Allal El Fassi, immeuble<br> Majorelle appartement n°20,<br> Marrakech</p>
                    <p>Email: yassine.boutakbout@gmail.com</p>
                    <p>Phone: +212 601 313 158</p>
                </div><!-- /.footer-widget about-widget -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-2 col-sm-6">
                <div class="footer-widget links-widget">
                    <div class="title">
                        <div class="line"></div><!-- /.line -->
                        <h3>Browse</h3>
                    </div><!-- /.title -->
                    <ul class="links-list">
                        <li><i href="google.com" class="fa fa-angle-right"></i> Contact Us</li>
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
        <p>&copy;  Copyrights 2018. Colis-Voiturage All Rights Reserved</p>
    </div><!-- /.container -->
</div><!-- /.footer-bottom -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


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



</body>
</html>
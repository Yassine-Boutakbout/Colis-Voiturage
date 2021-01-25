<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Viras Security || Responsive HTML 5 template</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <link rel="stylesheet"  href="{{ URL::asset('css/jquery-ui.min.css') }}">
</head>
<body id="reser">

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
                    <li class="current">
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
        </div><!-- /.container-fluid -->
    </nav>  
</header>


<section class="blog-style-two sec-pad blog-list-page blog-details-page contact-form-style-one reser">
    <div class="container">
        <div class="col-md-8">
            <div class="contact-form-style-one-content">
                {{$trajet->villeDep}}→
                @foreach($tve as $tv)
                {{$tv->villeE}}→
                @endforeach
                {{$trajet->villeArr}}
                {{-- CASABLANCA→ZHILIGA→KOURIBGA→FKIH BEN SALEH→TADLA→BENI MELLAL --}}<br>
                <div style="border: 1px solid; color: #123; margin-top: 20px; margin-left: 20px;">
                    <br>
                    Depart   : <i class="fa fa-chevron-circle-right"></i> {{-- Ain diab --}}{{$trajet->adresse_dep}} {{-- CASABLANCA --}} {{$trajet->villeDep}} <br><br>
                    Arrivée   : <i class="fa fa-chevron-circle-right"></i> {{-- CTM HANSALI --}} {{$trajet->adresse_arr}} {{-- BENI MELLAL --}} {{$trajet->villeArr}} <br><br>

                    Date de départ   : <i class="glyphicon glyphicon-calendar"></i>{{-- 30/05/2018 --}} {{$trajet->date_dep}} à {{-- 10:05 Am --}} {{$trajet->heure_dep}}
                    <br>
                    <div>
                        <img src="{{ URL::asset('img/team-1-1.png') }}" height="70" width="70"> {{-- Yassine Boutakbout --}} {{$client->prenom}} {{ $client->nom}} <br>
                        description: {{-- Texte de description decrivant le trajet. --}} {{$trajet->description}}
                        <br>
                        <button class="thm-btn">contactez le conducteur</button>
                    </div>
                    
                    
                    <div class="col-md-12" style="margin-top: 20px;">
                        <form method="POST" action="{{url('/afficher/'.$trajet->id)}}">
                            <div class="col-md-10">
                                <div class="form-box">
                                    <input placeholder="Contenu du colis*" value="{{Request::old('contenu')}}"  name="contenu" type="text">
                                </div><!-- /.form-box -->
                            </div><!-- /.col-md-6 -->
                     
                            <div class="col-md-10">
                                <div class="form-box">
                                    <input placeholder="Poid(kg)*" value="{{Request::old('poid')}}"  name="poids" type="text">
                                </div><!-- /.form-box -->
                            </div><!-- /.col-md-6 -->


                            <div class="col-md-3">
                                <div class="form-box">
                                    <input placeholder="Largeur(cm)*" value="{{Request::old('largeur')}}"  name="largeur" type="text">
                                </div><!-- /.form-box -->
                            </div><!-- /.col-md-6 -->
                        
                            <div class="col-md-3">
                                <div class="form-box">
                                    <input placeholder="Longueur(cm)*" value="{{Request::old('langeur')}}"  name="longueur" type="text">
                                </div><!-- /.form-box -->
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-4">
                                <div class="form-box">
                                    <input placeholder="Hauteur(cm)*" value="{{Request::old('hauteur')}}"  name="hauteur" type="text">
                                </div><!-- /.form-box -->
                            </div><!-- /.col-md-6 -->
                            <br>
                            <div class="col-md-10">
                                <div class="form-box">
                                    <button class="thm-btn" id="res-btn" type="Lancer l'alert">Submit</button>
                                </div><!-- /.form-box -->
                            </div><!-- /.col-md-6 -->
                        </form>
                    </div>
                </div>
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->

        <div class="col-md-4">
                <div class="sidebar sidebar-right">
                    <div class="single-sidebar search-widget">
                        PRIX: {{-- 3000 --}} {{$trajet->prix}} DHs
                    </div><!-- /.single-sidebar search-widget -->
                    <div class="single-sidebar category-widget">
                        <div class="title">
                            <h3>Conducteur</h3>
                        </div><!-- /.title -->
                        <ul class="category-list">
                            <li>
                                <div class="container">
                                    <div class="col-md-1">
                                        <img src="{{ URL::asset('img/team-1-1.png') }}" height="90" width="90">
                                    </div>
                                    <div class="col-md-2">
                                        {{-- Yassine Boutakbout --}} {{$client->prenom}} {{ $client->nom}} <br>{{-- 23 --}} {{$client->age}} ans<br><br>
                                    </div>
                                </div>
                                {{-- <div>
                                    <br>rating: 4.1
                                </div> --}}
                                <br>
                                
                                <br>
                            </li>
                            <li><a><i class="fa fa-chevron-circle-right"></i>@: {{-- yassine.boutakbout@gmail.com --}} {{$client->email}} </a></li>
                            <li><a><i class="fa fa-chevron-circle-right"></i>Tel: {{-- 06-01-31-31-58 --}} {{$client->telephone}} </a></li>
                        </ul><!-- /.category-list -->
                    </div><!-- /.single-sidebar category-widget -->
                    <div class="single-sidebar recent-post-widget">
                        <div class="title">
                            <h3>Vehicule</h3>
                        </div><!-- /.title -->

                        <i class="fa fa-chevron-circle-right" id="chev"></i> nom vehicule: {{$veh->nom}}
                        <br>
                        <i class="fa fa-chevron-circle-right" id="chev"></i> Capacité restant: {{$trajet->poid_rest*1000}} Kg
                        <br>
                        <i class="fa fa-chevron-circle-right" id="chev"></i> Volume restant: {{$trajet->vol_rest*1000}} L
                        <br>
                        <i class="fa fa-chevron-circle-right" id="chev"></i> matricule: {{-- 3684A62 --}} {{$veh->matricule}}
                        <br>
                        <i class="fa fa-chevron-circle-right" id="chev"></i> Illustration: 
                        <img src="{{ URL::asset("img/download.jpg") }}" height="120" width="240">
                    </div><!-- /.single-sidebar recent-post-widget -->


                    <div class="single-sidebar meta-widget">
                        <div class="title">
                            <h3>Activité</h3>
                        </div><!-- /.title -->
                        <ul class="meta-list">
                            <li><a><i class="fa fa-chevron-circle-right"></i> Total de trajets:     {{$count}}</a></li>
                            <li><a><i class="fa fa-chevron-circle-right"></i> Membre depuis: {{-- 2018-05-20 12:00:00 --}} {{$client->created_at}} </a></li>
                        </ul><!-- /.category-list -->
                    </div><!-- /.single-sidebar category-widget -->
                </div><!-- /.sidebar sidebar-right -->
            </div><!-- /.col-md-4 -->
    </div><!-- /.container -->
</section><!-- /.blog-style-two -->

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
<script src="assets/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="assets/owl.carousel-2/owl.carousel.min.js"></script>
<script src="assets/isotope.js"></script>
<script src="assets/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="assets/waypoints.min.js"></script>
<script src="assets/jquery.counterup.min.js"></script>
<script src="assets/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from html.tonatheme.com/2018/viras/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 11:09:37 GMT -->
</html>
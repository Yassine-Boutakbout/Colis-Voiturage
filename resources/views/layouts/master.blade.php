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
                <a class="navbar-brand" href="/home">
                    <img src="{{ URL::asset('/img/logo-1.png') }}" alt="Awesome Image"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="main-nav-bar">               
                <ul class="nav navbar-nav navigation-box main-navigation mainmenu">
                    <li>
                        <a href="register">Inscription</a>
                    </li>
                    <li class="current">
                       <a href="" data-toggle="modal" data-target=".search-form-modal" class="search-btn">Connection</a>                
                    </li>
                </ul>               
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>  
</header>



@yield('content')





<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <a href="/home" class="footer-logo"><img src="{{URL::to('/img/logo-1.png')}}" alt="Awesome Image"/></a>
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

<!-- Modal -->
<div class="modal fade search-form-modal" id="search-form-modal" tabindex="-1" role="dialog" aria-labelledby="search-form-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form  action="/auth"method="POST" class="popup-search-form" >

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="col-md-12">
                            <div class="form-box">
                            <input placeholder="Email*" value="{{Request::old('email')}}"  name="email" type="text" autofocus>
                            </div><!-- /.form-box -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-12">
                            <div class="form-box">
                            <input placeholder="Password*" name="pass" type="text" autofocus>
                            </div><!-- /.form-box -->
                        </div><!-- /.col-md-6 -->
                    <div class="col-md-12">
                        <div class="form-box">
                        <button class="thm-btn" type="submit">Submit</button>
                    </div><!-- /.form-box -->
        </div><!-- /.col-md-6 -->
                </form>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->

<script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
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
<script src="{{ URL::asset('assets/vegas/vegas.min.js') }}"></script>
<script src="{{ URL::asset('js/custom.js') }}"></script>


{{-- ajouté --}}
<script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: 31.62, lng: -7.98}
        });
        directionsDisplay.setMap(map);

        document.getElementById('submit').addEventListener('click', function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
      }

      // function map(){
      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var waypts = [];
        var checkboxArray = document.getElementById('waypoints');
        for (var i = 0; i < checkboxArray.length; i++) {
          if (checkboxArray.options[i].selected) {
            waypts.push({
              location: checkboxArray[i].value,
              stopover: true
            });
          }
        }

        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          waypoints: waypts,
          optimizeWaypoints: true,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
            var summaryPanel = document.getElementById('directions-panel');
            var dist;
            summaryPanel.innerHTML = '';
            // For each route, display summary information.
            for (var i = 0; i < route.legs.length; i++) {
              var routeSegment = i + 1;
              var dist;
              summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
                  '</b><br>';
              summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
              summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
              summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
              dist+=route.legs[i].distance.text +'   ';
            }
            $("#mappa").val(dist);
            console.log(dist);

          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };
    // }
    </script>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDX-GGkZNrN1OpESlrtDXVfimDpTeCsE0w&callback=initMap">  
</script>

</body>
</html>
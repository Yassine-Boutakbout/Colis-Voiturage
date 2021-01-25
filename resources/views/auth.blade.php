<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Colis-Voiturage</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    
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
                    <li class="current">
                       <a href="{{ url('/register')}}" >Inscription</a>                
                    </li>
                </ul>               
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>  
</header>
<section class="contact-form-style-one" id="auth-contact-form-style-one">
    <div class="container">
        <!-- /.col-md-6 -->
        <div class="col-md-7">
            <div class="contact-form-style-one-content">
                <div class="sec-title">
                    <div class="line"></div><!-- /.line -->
                    <h2>Log<span>in</span></h2>
                    </div><!-- /.sec-title -->

@if (isset($errors) && $errors->any() )
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-danger alert-alt">
                <strong><i class="fa fa-bug fa-fw"></i> Ошибка</strong><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    @if(session()->has('message'))
                     {{  session()->get('message')}}
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <br/>

@endif

<form class="colon" method="POST" >
                    
   @csrf               
                      <div class="col-md-12 ">
                        <div class="form-box">
                    
                       

                

                   
                    
                </div>

                   
                 
                    <div class="col-md-12">
                        <div class="form-box">
                            <i class="fa fa-envelope"></i>
                            <input placeholder="Email*" value="{{Request::old('email')}}"  name="email" type="text" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->
                    
                        
                         <div class="col-md-12">
                        <div class="form-box">
                            <i class="glyphicon glyphicon-link"></i>
                            <input placeholder="Password*" name="pass" type="password" autofocus>
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                        
                   
<div class="col-md-12">
                        <div class="form-box">
                        <button class="thm-btn" type="submit">login</button>
                    </div><!-- /.form-box -->
        </div><!-- /.col-md-6 -->

                    
                </form>
            </div><!-- /.contact-form-style-one-content -->
        </div><!-- /.col-md-6 -->
    </div><!-- /.container -->
</section><!-- /.contact-form-style-one -->



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




<!-- /Modal -->






</body>
</html>
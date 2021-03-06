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
<meta name="viewport" content="width=device-width, initial-scale=1">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"> </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('/profilecond') }}">Profile <span class="sr-only">(current)</span></a></li>
        <li><a href="{{url('/trajets/'.Session::get('id_c'))  }}">vos trajets proposés</a></li>
        <li><a href="{{url('/vehecules/'.Session::get('id_c')) }}">vos vhécule</a></li>
         <li><a href="{{url('/message') }}">reception des messages</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{  url('/logout') }}">logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


@yield('content')


</body>
</html>
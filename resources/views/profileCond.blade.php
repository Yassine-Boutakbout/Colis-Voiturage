@extends('layouts.layoutProfileCond')

@section('content')
    
    
    <link rel="stylesheet" href="css/reset.css">

    
        <link rel="stylesheet" href="css/style2.css">



</style>
</head>
    
    
  </head>
  <body>

    <div class="container">
  <div class="avatar-flip">
    <img src="http://media.idownloadblog.com/wp-content/uploads/2012/04/Phil-Schiller-headshot-e1362692403868.jpg" height="150" width="150">
    <img src="http://i1112.photobucket.com/albums/k497/animalsbeingdicks/abd-3-12-2015.gif~original" height="150" width="150">
  </div>
  <h2>{{ Session::get('infosP')->nom }}  {{ Session::get('infosP')->prenom }}</h2>

 
<br>
<div class="overlay" style="position: relative;top: -22px;">
<?php $conducteur=App\Conducteur::find(Session::get('id_c')) ?>
            @if($conducteur->rating==0)
            <i class="fa fa-star" style="color: grey;"></i>
            <i class="fa fa-star" style="color: grey;"></i>
            <i class="fa fa-star" style="color: grey;"></i>
            <i class="fa fa-star" style="color: grey;"></i>
            <i class="fa fa-star" style="color: grey;"></i>
            @else
            @while($conducteur->rating>0)
                @if($conducteur->rating >0.5)
                    <i class="fa fa-star" style="color: orange;"></i>
                @else
                    <i class="fa fa-star" style="color: grey;"></i>
                @endif
                @php $conducteur->rating--; @endphp
            @endwhile
            @endif
</div> 
  <p><p> {{ Session::get('infosP')->email }}
          <i class="glyphicon glyphicon-envelope"></i>
           <br />
  </p></p>
  <p>     {{ Session::get('infosP')->telephone }}
          <i class="glyphicon glyphicon-gift"></i></p>
</div>
    
    
    
    
    
@endsection

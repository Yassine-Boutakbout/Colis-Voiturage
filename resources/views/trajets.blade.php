@extends('layouts.layoutProfileCond')

@section('content')
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/liste.css')}}">
<section >
    <div class="container" style="position:relative;margin-right: 200px;float:right;width: 75%;">
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
@if( count($infosT)!=0 )
<div class="card">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr>
  <th scope="col" width="500" >Trajet</th>                                                              
  <th scope="col" width="200">Date de départ</th>
  <th scope="col" >Vehicule</th>
  <th scope="col" width="200">Poid Restant</th>
  <th scope="col" width="200">Volume Restant</th>
  <th scope="col" width="200" class="text-right">Action</th>
</tr>
</thead>
<tbody>
<?php $i=0 ?>
@foreach($infosT as $t)
<tr>
    <td>
    {{ $t->villeDep}} @if(count($infoVE[$i])) @foreach($infoVE[$i] as $villeEtapes) ->{{
$villeEtapes->villeE }} @endforeach @endif ->{{ $t->villeArr}}
    </td>
    <td>
    <div class="price-wrap"> 
      <var class="price">{{ $t->date_dep }}</var> 
    </div> <!-- price-wrap .// -->
    </td>
  <td>
<figure class="media">
  <div class="img-wrap" style="float: left;"><img src=" {{asset('storage/'.$infosV[$i]->image) }}" class="img-thumbnail img-sm"></div>
</figure> 
  </td>
  <td> 
    <div class="price-wrap"> 
      <var class="price">{{ $t->poid_rest }}  </var> 
    </div> <!-- price-wrap .// -->
  </td> 
  <td> 
    <div class="price-wrap"> 
      <var class="price">{{ $t->vol_rest }}</var> 
    </div> <!-- price-wrap .// -->
  </td>
  <td class="text-right">  
<form action=" {{ url('/deletetrajet/'.$t->id )}}" method="post" onsubmit="return ConfirmDelete()"> 
    {{ csrf_field() }}
    {{ csrf_field('DELETE') }}
  <button type="submit"  class="btn btn-outline-danger"> × Annuler</button>
</form>

  </td>
</tr>
<?php $i++ ?>
@endforeach
</tbody>
</table>
</div> <!-- card.// -->
@else
<div id="flex" class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    Vous avez aucun trajet porposé.                </div>
            </div>
 </div> 
@endif        
 </div>   
</section>
<script type="text/javascript">
	
	$(document).ready(function(){
    $("#formButton").click(function(){
        $("#form1").toggle("slow");
        $("#formButton").html($("#formButton").html() == 'Annuler' ? 'Add New Car !' : 'Annuler')
    });
});
</script>

<!-- popup script -->
<script>

  function ConfirmDelete()
  {
  var x = confirm("Are you sure you want to delete?");
  if (x)
    return true;
  else
    return false;
  }

</script>
<!-- end popup script -->



@endsection
@extends('layouts.layoutProfileExp')

@section('content')

 
  <link rel="stylesheet" type="text/css" href="css/listeVehicule.css">

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <style>
            #flex{
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 36px;
                padding: 20px;
            }

            .text-right {
    			text-align: center;
			}
			.th , .td {
    			text-align: center;
			}
        </style>
@if(count($infosR)!=0)
<div class="card" style="padding: 30px">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr>
  <th scope="col" width="250">Trajets</th>
  <th scope="col" width="60">Image de vehicule </th>
  <th scope="col" width="60">Date de depart</th>
  <th scope="col" width="90">Heure de depart</th>
  <th scope="col" width="70">Poid de colis</th>
  <th scope="col" width="90">Volume de colis</th>
  <th scope="col" width="20" class="text-right">Action</th>
</tr>
</thead>
<tbody>
<?php $courant=0 ?>	
 @foreach( $infosR as $r)

<tr>
   <td> 
{{ $infosT[$courant]->villeDep }}->{{ $infosT[$courant]->villeArr }}</td>
  <td>
<figure class="media">
      
  <div class="img-wrap" style="float: left;text-align: center;"><img src="{{ asset('storage/'.$infosV[$courant]->image )}}" class="img-thumbnail img-sm"></div>

</figure> 
  </td>
<td> 
    <div class="price-wrap"> 
      <var class="price"> {{ $infosT[$courant]->date_dep }} </var> 
    </div> <!-- price-wrap .// -->
  </td>
  <td> 
  	{{ $infosT[$courant]->heure_dep }}
  </td>
  <td>
  {{ $r->poid  }}
  </td>
  <td> 
 {{ $r->volume  }}
  </td>
  <td class="text-right"> 
  <form action=" {{ url('/deletereservation/'.$r->id )}}" method="post" onsubmit="return ConfirmDelete()" > 
    {{ csrf_field() }}
    {{ csrf_field('DELETE') }}
  <button type="submit"  class="btn btn-outline-danger"  > × Annuler</button>
  </form>
  </td>
</tr>
@endforeach
</tbody>
</table>
</div> <!-- card.// -->
@else 

<div id="flex" class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    Vous avez aucune reservation.                </div>
            </div>
 </div> 
        
@endif

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
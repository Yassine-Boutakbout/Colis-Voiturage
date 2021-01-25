@extends('layouts.layoutProfileCond')
@section('content')
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/liste.css')}}">

<section >
    <div class="container" style="position:relative;margin-right: 520px;float:right;width: 800px">
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
 @if(!is_null('infosV'))       
<div class="card">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr>
  <th scope="col" width="120">Vehicule</th>
  <th scope="col" width="120"></th>
  <th scope="col" width="120">Matricule</th>
  <th scope="col" width="200" class="text-right">Action</th>
</tr>
</thead>
<tbody>
@foreach( $infosV as $v)
<tr>
  <td>
<figure class="media">
  <div  class="img-wrap" style="float: left; " ><img src="{{ asset('storage/'.$v->image) }}" class="img-thumbnail img-sm"></div>
  <div>
  <figcaption class="media-body">
    <dl class="param param-inline small">
      <dt>Size: </dt>
      <dd>XXL</dd>
    </dl>
    <dl class="param param-inline small">
      <dt>Color: </dt>
      <dd>Orange color</dd>
    </dl>
  </figcaption>
</div>
</figure> 
  </td>
  <td> 

  </td>
  <td> 
    <div class="price-wrap"> 
      <var class="price">{{ $v->matricule }}</var> 
    </div> <!-- price-wrap .// -->
  </td>
  <td class="text-right"> 
    <form action=" {{ url('/deletevehicule/'.$v->matricule )}}" method="post"> 
    {{ csrf_field() }}
    {{ csrf_field('DELETE') }}
  <button type="submit"  class="btn btn-outline-danger"> × Remove</button>
</form>
  </td>
</tr>
@endforeach
@else Vous avez pas des Vehicule, essayer de les ajouter
@endif
</tbody>
</table>
</div> <!-- card.// -->
        
    </div>
<div class="container" style="width: 35%; margin-right: 15px;margin-left:860px;height: 50%;position:absolute;text-align:center">
<div style="margin-left: 200px;">

<button type="button" id="formButton" style="border-radius: 28px; font-family: Arial; color: #ffffff; font-size: 20px; background: #3498db; padding: 10px 20px 10px 20px; text-decoration: none; ssmargin:20px; background: #3cb0fd; text-decoration: none;">Add New Car !</button>
  <br><br>
 <center>
<form method="post" action="{{ url('/addvehecule') }}" id="form1"  enctype="multipart/form-data" >
	
	 @csrf
                      <div class="col-md-12 ">
                        <div class="form-box">
                            <input class="form-control"  style="width: 50%;" placeholder="matricule"   name="matricule" type="text"  autofocus required>
                            
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-8" id="typeicons"style="float: center;">
                        <div class="form-box">
                            <br><br>

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
                    <br>
                     <div class="col-md-12">
                        <div class="form-box">
                           <label style="margin-right: 90px;">Photo du Vehicule:</label><br>
                            <input class="form-control"  style="width: 50%;" type="file"  name="image"  autofocus required />
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->
                    
 <div class="col-md-12">
    <div class="form-box">                  
  <button class="form-control" style="width: 50%;" type="submit" id="submit">Ajouter</button>
    </div>
 </div>   
  </form>	
  </center> 
</div>
</div>   
</section>
<script type="text/javascript">
	
	$(document).ready(function(){
		$("#form1").toggle()==false ;
    $("#formButton").click(function(){
        $("#form1").toggle("slow")
        $("#formButton").html($("#formButton").html() == 'Annuler' ? 'Add New Car !' : 'Annuler')
    });
});
  
</script>




@endsection
@extends('layouts.master')

@section('content')



<!-- /.contact-info-style-one -->
<link rel="stylesheet"  href="{{ URL::asset('css/jquery-ui.min.css') }}">
<style type="text/css">
 
 #map{
            height: 800px;
            width: auto;
             
        }
        #x{
            
            float:left; 
        }
      
    </style>

    <section class="inner-banner" style="background-image: url(img/andrew-kambel-269602-unsplash.jpg);">
    <div class="container">
        <div class="title pull-left">
            <h2>Bienvenu Entre Nous ! </h2>
        </div><!-- /.title pull-left -->
        
    </div><!-- /.contianer -->
</section><!-- /.inner-banner -->

<section class="contact-form-style-one">
    <div class="container">
        <!-- /.col-md-6 -->
        <div class="col-md-7" id="x" style="right: 300px;margin-right: -300px;">
            <div class="contact-form-style-one-content">
               

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


      @if(session()->has('success'))


    <div class="alert alert-success">
    {{  session()->get('success')}}
  
</div>

      @endif

 
<form class="colon" method="POST" >
                
                <div class="col-md-5 " id="x">
                    <div class="row-fluid">
                      <select class="selectpicker" name="start" id="start" data-show-subtext="true" data-live-search="true">
                          @if (isset($ville))
                          @foreach($ville as $v)
                          <option value="{{ $v->nom }}"/>{{ $v->nom }}</option>
                          @endforeach
                          @endif
                      </select>
                     </div>
                 </div><!-- /.col-md-6 -->

                <div class="col-md-5 ">
                    <div class="row-fluid">
                          <div class="form-box">
                            <select class="selectpicker" name="end" id="end"  data-show-subtext="true" data-live-search="true">
                             @if (isset($ville))
                              @foreach($ville as $v)
                                <option value="{{ $v->nom }}"/>{{ $v->nom }}</option>
                              @endforeach
                             @endif
                           </select>
                       </div>
                    </div>
                  </div><!-- /.col-md-6 -->
                  <div class="col-md-6" hidden>
                            <div class="form-box">
                                <b>Ville D'etape</b> <br>
                                <i>(Ctrl+Clique ou Cmd+Click pour une selection multiple)</i> <br>
                                <select multiple name="waypoints[]" id="waypoints">
                                    @foreach($ville as $v)
                                        <option value="{{ $v->nom }}">{{ $v->nom }}</option>
                                        <br>
                                    @endforeach
                                </select>
                            </div><!-- /.form-box -->
                        </div><!-- /..col-md-8 -->


                  <div class="col-md-2 ">
                        <div class="row-fluid">
                          <div class="form-box">
                            <i class="glyphicon glyphicon-pencilr"></i>
                            <input type="button" class="thm-btn" id="submit" value="tracer">
                          </div>
                        </div>
                  </div><!-- /.col-md-6 -->
                   

                   <div class="col-md-8 ">
                        <div class="form-box">
                            <i class="glyphicon glyphicon-calendar"></i>
                            <input placeholder="Date limite*" value="{{Request::old('dateDep')}}"  name="dateDep" min="{{Carbon\Carbon::now()->toDateString()}}" type="Date">
                            
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                     <div class="col-md-4 ">
                        <div class="form-box">
                            <i class=""></i>
                            <input placeholder="HeureDep*" min="{{Carbon\Carbon::now()->toDateString()}}" value="{{Request::old('heureDep')}}"  name="heureDep" type="Time">
                            
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-8 ">
                        <div class="form-box">
                            <i class="glyphicon glyphicon-calendar"></i>
                            <input placeholder="Date limite*" value="{{Request::old('dateArr')}}"  name="dateArr" type="Date">
                            
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                     <div class="col-md-4 ">
                        <div class="form-box">
                            <i class=""></i>
                            <input placeholder="Heure*" value="{{Request::old('heureArr')}}"  name="heureArr" type="Time">
                            
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-12 ">
                        <div class="form-box">
                            <input placeholder="Contenu du colis*" value="{{Request::old('contenu')}}"  name="contenu" type="text">
                            
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->
                 
                 <div class="col-md-12">
                        <div class="form-box">
                            <input placeholder="Poid(kg)*" value="{{Request::old('poid')}}"  name="poid" type="text">
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                 
                    <div class="col-md-4">
                        <div class="form-box">
                            <input placeholder="Largeur(m)*" value="{{Request::old('largeur')}}"  name="largeur" type="text">
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->
                    
                        <div class="col-md-4">
                            <div class="form-box">
                            <input placeholder="Langeur(m)*" value="{{Request::old('langeur')}}"  name="langeur" type="text">
                        </div><!-- /.form-box -->
                     </div><!-- /.col-md-6 -->

                  
                            <div class="col-md-4">
                        <div class="form-box">
                            <input placeholder="Hauteur(m)*" value="{{Request::old('hauteur')}}"  name="hauteur" type="text">
                        </div><!-- /.form-box -->
                    </div><!-- /.col-md-6 -->

                         
                   
<div class="col-md-12">
                        <div class="form-box">
                        <button class="thm-btn" type="Lancer l'alert">Submit</button>
                    </div><!-- /.form-box -->
        </div><!-- /.col-md-6 -->

                    
                </form>
            </div><!-- /.contact-form-style-one-content -->
        </div><!-- /.col-md-6 -->
        
        <div id='map'></div>
    
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

{{-- <script type="text/javascript">
   
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
</script> --}}

@endsection
@extends('layouts.master')

@section('content')

<style type="text/css">
        
        #map{
            height: 685px;
            width: 100%;
            margin-left: 0;
        }
    </style>

@php
use App\Ville;
use App\Type_Vehicule;
use App\Vehicule;
use App\Trajet;
use App\Conducteur;
use App\Client;
use App\Tve;
@endphp

<section class="inner-banner" style="background-image: url(img/inner-banner-1-4.jpg);">
    <div class="container">
        <div class="title pull-left">
            <h2>Blog Details</h2>
        </div><!-- /.title pull-left -->
        <div class="breadcumb pull-right">
            <a href="#">Home</a><!--
            --><span class="sep">/</span><!--
            --><span class="page-name">Blog Details</span>
        </div><!-- /.breadcumb pull-right -->
    </div><!-- /.contianer -->
</section><!-- /.inner-banner -->



<section class="contact-form-style-one">
    <div class="container" style="padding-top: 0px;margin-left: 0px;width: 95%;">
        <div class="contact-form-style-one-content">
            <form method="POST" class="row">
                {{ csrf_field() }}
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <div class="form-box">
                                <b>Ville Depart:</b><br>
                                <select name="start" id="start" class="selectpicker" data-show-subtext="true" data-live-search="true" onchange="document.getElementById('submit').click()">
                                    @foreach($ville as $v)
                                        <option value="{{ $v->nom }}">{{ $v->nom }}</option>
                                        <br>
                                    @endforeach
                                </select>
                            </div><!-- /.form-box -->
                        </div><!-- /..col-md-8 -->

                        <div class="col-md-6">
                            <div class="form-box">
                                <i class="fa fa-chevron-circle-right"></i>Adresse Depart<br>
                                <select name="adresse_dep" placeholder="" class="selectpicker" data-show-subtext="true" data-live-search="true"/>
                                    @foreach($adresse as $a)
                                        <option value="{{ $a->nom }}">{{ $a->nom }}</option>
                                        <br>
                                    @endforeach
                                </select>
                            </div><!-- /.form-box -->
                        </div><!-- /..col-md-8 -->
                        <br>

                        <div class="col-md-6">
                            <div class="form-box">
                                <b>Ville D'arrivee</b><br>
                                <select name="end" id="end" class="selectpicker" data-show-subtext="true" data-live-search="true" onchange="document.getElementById('submit').click()">
                                    @foreach($ville as $v)
                                        <option value="{{ $v->nom }}">{{ $v->nom }}</option>
                                        <br>
                                    @endforeach
                                </select>
                            </div><!-- /.form-box -->
                        </div><!-- /..col-md-8 -->
                        <br>
                        <div class="col-md-6">
                            <div class="form-box">
                                <i class="fa fa-chevron-circle-right"></i>Adresse Arrivee<br>
                                <select name="adresse_arr" placeholder="" class="selectpicker" data-show-subtext="true" data-live-search="true"/>
                                    @foreach($adresse as $a)
                                        <option value="{{ $a->nom }}">{{ $a->nom }}</option>
                                        <br>
                                    @endforeach
                                </select>
                            </div><!-- /.form-box -->
                        </div><!-- /..col-md-8 -->
                        <div class="col-md-6">
                            <div class="form-box">
                                <b>Ville D'etape</b> <br>
                                <i>(Ctrl+Clique ou Cmd+Click pour une selection multiple)</i> <br>
                                <select multiple name="waypoints[]" id="waypoints" class="selectpicker" data-show-subtext="true" data-live-search="true" onchange="document.getElementById('submit').click()">
                                    @foreach($ville as $v)
                                        <option value="{{ $v->nom }}">{{ $v->nom }}</option>
                                        <br>
                                    @endforeach
                                </select>
                            </div><!-- /.form-box -->
                        </div><!-- /..col-md-8 -->
                        <div class="col-md-8">
                            <div class="form-box">
                                <br>
                                <input type="hidden" class="thm-btn"  id="submit" value="Tracer chemin">
                            </div><!-- /.form-box -->
                        </div><!-- /..col-md-8 -->
                    </div><!-- /..col-md-6 -->

                    

                    <div class="col-md-6">
                        <div class="col-md-5">
                            <div class="form-box">
                                Date Depart
                                <i class="fa fa-chevron-circle-right"></i>
                                <input type="Date" name="date_dep" placeholder=""/>
                            </div><!-- /.form-box -->
                        </div><!-- /.col-md-5 -->    
                    
                        <div class="col-md-5">
                            <div class="form-box" >
                                Date Arrivee
                                <i class="fa fa-chevron-circle-right"></i>
                                <input type="Date" name="date_arr" placeholder=""/>
                            </div><!-- /.form-box -->
                        </div><!-- /.col-md-6 -->
                        <br>
                        <div class="col-md-5">
                            <div class="form-box" >
                                Heure Depart
                                <i class="fa fa-chevron-circle-right"></i>
                                <input type="time" name="heure_dep" placeholder=""/>
                            </div><!-- /.form-box -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-5">
                            <div class="form-box">
                                Heure Arrivee
                                <i class="fa fa-chevron-circle-right"></i>
                                <input type="time" name="heure_arr" placeholder="" />
                            </div><!-- /.form-box -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-box" >
                                Type Vehicule:
                                <select name="vehicule">
                                    @php $i=0; @endphp

                                    @foreach($veh as $v)
                                        <option value="{{ $v->matricule }}">{{ $v->matricule }} Poid: {{ Type_Vehicule::find($v->id_type)->poid_max*1000 }}Kg  Volume: {{ Type_Vehicule::find($v->id_type)->vol_max*1000 }}  L</option>
                                        $i++;
                                    @endforeach
                                </select>
                            </div><!-- /.form-box -->
                            <div class="form-box" >
                                poids occupé:
                                <i class="fa fa-pencil-square"></i>
                                <input name="poids_occupe" type="text" placeholder="Poids en Kg" maxlength="10" />
                            </div><!-- /.form-box -->
                            <div class="form-box" >
                                volume occupé:
                                <i class="fa fa-pencil-square"></i>
                                <input name="vol_occupe" type="text" placeholder="Volume en L" maxlength="10"/>
                            </div><!-- /.form-box -->
                        </div><!-- /.col-md-6 -->

                        
                        <div class="col-md-10">
                            <div class="form-box">
                                Plus de details
                                <i class="fa fa-pencil-square"></i>
                                <textarea name="description" placeholder="Decrivez les conditions de conduite: fumer, animal autorisé, jouer Quran/Musique..."></textarea>
                            </div><!-- /.form-box -->
                            <button class="thm-btn" type="submit">Publier Trajet</button>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /..col-md-6 -->
                    <div hidden><input type='text' name='distance' id="mappa"></div>
                </div><!-- /..col-md-12 -->
            </form>
            <br>
        </div>
        <div id="directions-panel">
        </div>
    </div>
</section>


    <div id="map"></div>



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
</script>

<script type="text/javascript">
    
    $("#start").Click(function(){


    })

</script> --}}

@endsection
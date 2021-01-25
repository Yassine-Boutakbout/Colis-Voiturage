@extends('layouts.layoutProfileCond')

@section('content')

<style type="text/css">
    
</style>
</head>
<body>
<section class="contact-form-style-two gray-bg sec-pad">
    <div class="container">
        <div class="col-md-12" id="continermsg">
            <div class="col-md-2" class="cat">
                <ul type="none">
                    <br>
                    <li id="res" style="border: 1px #fff dashed;">Boite Reception</li>
                </ul>
            </div>
            <div class="col-md-4" id="msg" style="display: none; margin-top: 20px;">
                <ul type="none" id="data">
                    @foreach($message as $m)
                        <li id="{{$m->id}}"><a style="color: #0e0e0e;">{{$m->objet}} de {{ $client[$m->id_env-2]->nom }} {{ $client[$m->id_env-2]->prenom }}</a></li><br>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6" id="ici" style="display: none; margin-top: 20px;">
                lecture message
                <ul type="none">
                    @foreach($message as $m)
                        <li> </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="contact-form-style-two-content">
            @if (isset($errors) && $errors->any())
                <div class="row">
                    <div class="col-xs-12">
                        <div class="alert alert-danger alert-alt">
                            <strong><i class="fa fa-bug fa-fw"></i> Exception</strong><br>
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
            <form method="POST" class="row" id="pst" >
                {{csrf_field()}}
                <div class="col-md-6">
                    <div class="form-box">
                        <div class="form-group {{ $errors->has('dest') ? 'has-error' :'' }}">
                            <i class="fa fa-user"></i>
                                <input name="dest" list="browsers" placeholder="Destinataire*" />
                                <datalist id="browsers">
                                    @if (isset($client))
                                        @foreach($client as $c)
                                            <option value="{{ $c->email }}"/>
                                        @endforeach
                                    @endif
                            </datalist>
                        </div>
                    </div><!-- /.form-box -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="form-box">
                        <div class="form-group {{ $errors->has('objet') ? 'has-error' :'' }}">
                            <i class="fa fa-envelope"></i>
                            <input type="text" name="objet" placeholder="Objet*" />
                        </div>
                    </div><!-- /.form-box -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-12">
                    <div class="form-box">
                        <div class="form-group {{ $errors->has('message') ? 'has-error' :'' }}">
                            <i class="fa fa-pencil-square"></i>
                            <textarea name="message" placeholder="Votre Message"></textarea>
                        </div>
                    </div><!-- /.form-box -->
                    <button class="thm-btn" type="submit">Submit</button>
                </div><!-- /.col-md-12 -->
            </form>
        </div><!-- /.contact-form-style-one-content -->
    </div><!-- /.container -->
</section><!-- /.contact-form-style-two -->

{{$errors}}

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







<!-- /Modal -->

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

<script type="text/javascript" src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>

<script>
   
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

<script>

    $('#res').on('click',function () {
        $('#msg').animate({opacity: 'toggle'})
    });



    $("#data li").click(function() {

        // alert(this.id); // id of clicked li by directly accessing DOMElement property
        $.get('{{URL::to('msg/')}}'+'/'+this.id,function (data) {
        $('#ici').html(data).animate({height: 'toggle'});
        // alert($(this).attr('id')); // jQuery's .attr() method, same but more verbose
        // alert($(this).html()); // gets innerHTML of clicked li
        // alert($(this).text()); // gets text contents of clicked li
    });

    // $('ul[id="data"]').on('click',function () {

    //     var ob =($('option[id="ob"]').attr('value'));
    //     $.get('{{URL::to('msg/')}}'+'/'+ob,function (data) {
    //     $('#ici').html(data).animate({height: 'toggle'});
    //     console.log(test);
    //     });
    })

    
</script>

<script type="text/javascript">
    $('#data li').click(function () {
    // remove existing active class inside li elements
    $('li.activemsg').removeClass('activemsg');
    // add class to current clicked element
    $(this).closest('li').addClass('activemsg');
});

</script>



@endsection